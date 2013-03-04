@layout('layouts.default')
@section('content')
{{ Form::open('search/index', 'POST') }}

      {{ Form::token() }}
   
          {{ Form::label('type','Profile Type') }}
        {{ Form::select('type',array('1'=>'Form Mating','2'=>'For Sale','3'=>'Adoption','4'=>'Showcase')) }}
      

         
        {{ Form::label('kind','Kind') }}
        {{ Form::text('kind') }}
      

        
        {{ Form::label('race','Race') }}
        {{ Form::text('race') }}
      

        
        {{ Form::label('sex','Sex') }}
        {{ Form::select('sex',array('Male'=>'Male','Female'=>'Female')) }}
      

          
      	{{ Form::label('country','Select Country') }}
        {{ Form::select('country',array('1'=>'America')) }}
         
           
        {{ Form::label('state','Select State') }}
        {{ Form::select('state',$states) }}
     	  
     	    
     	{{ Form::label('city','City') }}
        {{ Form::text('city') }}
		  
		    
        {{ Form::label('zipcode','Zip') }}
        {{ Form::text('zipcode') }}
         
       

		</tr>
		</table>
      <div class="submit_sect">
      {{ Form::submit('Search', array('class'=>'btn btn-large btn-primary align-right')) }}
      </div>

    {{ Form::close() }}



    <!-- /////////////////////////////////////////////////////////////////// -->

      <div id="test1" class="gmap3"></div>
    <div id="results" class="search-results">

     <?php  if(isset($this->searchResult))
          {
              foreach($this->searchResult as $resultt):
                  if(isset($resultt['name'])) {echo $resultt['name']."<br />";}
                  if(isset($resultt['amount'])) {echo $resultt['amount']."<br />";}
                  if(isset($resultt['details'])) { 
                    
                     if(strlen($resultt['details'])<=50)
                                               {
                          ?><a href="/search/get-details/id/<?php echo $resultt['id']; ?>"><?php echo $resultt['details'];?></a><?php
                          echo "<br />";
                        }
                        else
                        {
                          $y=substr($resultt['details'],0,20) . '...';
                          ?><a href="/search/get-details/id/<?php echo $resultt['id']; ?>"><?php echo  $y;?></a><?php 
                          echo "<br />";
                        }
                  }
                  if(isset($resultt['race'])) {echo $resultt['race']."<br />";}
                  echo "<br />";

              endforeach;
           
          }


         
      ?>

    </div>
    <div class="clear"></div>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script type="text/javascript" src="js/gmap3.min.js"></script> 

 
    
    
    
<style type="text/css">
<!--
    .cluster{
        color: #FFFFFF;
        text-align:center;
        font-family: 'Arial, Helvetica';
        color: #EA6175;
        font-size:20px;
        font-weight:bold;
      }
      .cluster-1{
        background-image:url(images/m1.png);
        line-height:53px;
        width: 53px;
        height: 52px;
      }
      .cluster-2{
        background-image:url(images/m2.png);
        line-height:53px;
        width: 56px;
        height: 55px;
      }
      .cluster-3{
        background-image:url(images/m3.png);
        line-height:66px;
        width: 66px;
        height: 65px;
      }

    
      .gmap3{
        margin: 20px auto;
        border: 1px dashed #C0C0C0;
        width: 800px;
        height: 500px;
        text-align: center;
      
      }
     .gmap3 img {
           max-width: none;
    }
    </style>

    <?php

 $zipResult = "67701";
 if(isset($this->searchResult)){
 foreach($this->searchResult as $resultt):
 
 $desc = $resultt['name']."<br /><br />".
 "<a href=/search/get-details/id/".$resultt['id'].">Details</a><br />";

 $zip = new Application_Model_Zipcode();
  $dd = $resultt['zipcode'];
  $where = "zip_code = '$dd'"; 
  
  $zipResult = $zip->fetchAll($where)->toArray();
  


$db=Zend_Db_Table_Abstract::getDefaultAdapter();

 foreach ($zipResult as $valuee) {
    
          
          $profile_id=$resultt['id'];
          
           $profile_pic=$db->select()->from("profile_pictures")->where("profile_id=?",$profile_id)
                                     ->query()
                                     ->fetch(Zend_db::FETCH_OBJ)->picture;
           // $profile_pic = NULL;
//      echo '<pre>';
//        print_r(  $profile_pic  );
//        echo '</pre>';
//        
//        die('DEBUG');
////     
      $latitude = $valuee['lat'];
    $longitude = $valuee['lon'];
 
               $latlang[]=array( 'lat'=>$latitude, 'lng'=>$longitude );
           

$content= $resultt['name']."<br />".
 "<a href=/search/get-details/id/".$resultt['id'].">Details</a><br />".
 "<img src='user_images/".$profile_pic."' height='150' width='200' />";

 
 $data[]='{latLng:['.$latitude.', '.$longitude.'], data:"'.$content.'"}';
     
  }
  
  
 endforeach;
 
 $valuesData=implode(',',$data);
 
 ?>
    
 
    
    <script type="text/javascript">
        
              $(function(){
      
        $('#test1').gmap3({
          map:{
            options:{
              center:[<?php  echo $latlang[0]['lat']." , ".$latlang[0]['lng']; ?>],
              zoom: 4
            }
          },
          marker:{
            values:[
            <?php  echo $valuesData; ?>
        ],
             cluster:{
              radius: 100,
              events:{
               mouseover: function(cluster, event){
                 $(cluster.main.getDOMElement()).css('border', '1px solid #FF0000');
               },
               mouseout: function(cluster, event){
                 $(cluster.main.getDOMElement()).css('border', '0px');
               }
              },
              // This style will be used for clusters with more than 0 markers
              0: {
                content: '<div class="cluster cluster-1">CLUSTER_COUNT</div>',
                width: 53,
                height: 52
              },
              // This style will be used for clusters with more than 20 markers
              20: {
                content: '<div class="cluster cluster-2">CLUSTER_COUNT</div>',
                width: 56,
                height: 55
              },
              // This style will be used for clusters with more than 50 markers
              50: {
                content: '<div class="cluster cluster-3">CLUSTER_COUNT</div>',
                width: 66,
                height: 65
              }
            },
            options:{
              draggable: false
            },
            events:{
              mouseover: function(marker, event, context){
                var map = $(this).gmap3("get"),
                  infowindow = $(this).gmap3({get:{name:"infowindow"}});
                if (infowindow){
                  infowindow.open(map, marker);
                  infowindow.setContent(context.data);
                } else {
                  $(this).gmap3({
                    infowindow:{
                      anchor:marker, 
                      options:{content: context.data}
                    }
                  });
                }
              },
              mouseout: function(){
                var infowindow = $(this).gmap3({get:{name:"infowindow"}});
                if (infowindow){
                 // infowindow.close();
                }
              }
            }
          }
        });
      });
    </script>
@endsection
