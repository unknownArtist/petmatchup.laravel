@layout('layouts.default')
@section('content')

{{ Form::open('search/index', 'POST') }}


<div class="search">

      {{ Form::token() }}
   
          {{ Form::label('type','Profile Type') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::select('type',array('1'=>'Form Mating','2'=>'For Sale','3'=>'Adoption','4'=>'Showcase')) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      

         
        {{ Form::label('kind','Kind') }}&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::text('kind') }}<br />
      

        
        {{ Form::label('race','Race') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::text('race') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      

        
        {{ Form::label('sex','Sex') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::select('sex',array('Male'=>'Male','Female'=>'Female')) }}<br />
      

          
      	{{ Form::label('country','Select Country') }}&nbsp;&nbsp;
        {{ Form::select('country',array('1'=>'America')) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         
           
        {{ Form::label('state','Select State') }}&nbsp;&nbsp;
        {{ Form::select('state',$states) }}<br />
     	  
     	    
     	{{ Form::label('city','City') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::text('city') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  
		    
        {{ Form::label('zipcode','Zip') }}&nbsp;&nbsp;&nbsp;
        {{ Form::text('zipcode') }}
         
         
      <div class="searchbtn">
      {{ Form::submit('Search', array('class'=>'btn btn-large btn-primary align-right')) }}
      </div>
    
    {{ Form::close() }}
    <div id="test">
    </div>
		</div>


    <!-- /////////////////////////////////////////////////////////////////// -->

    {{ HTML::script("js/jquery-1.5.2.min.js"); }}        
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    {{ HTML::script("js/gmap3.min.js"); }} 
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
        width: 1000px;
        height: 500px;
        text-align: center;
      
      }
     .gmap3 img {
           max-width: none;
    }
    </style>

<?php $zipResult = "67701";

 if(isset($searchResult)){
  foreach($searchResult as $key => $resultt):

     $desc = $resultt->name."<br /><br />".

 "<a href=/search/get-details/id/".$resultt->id.">Details</a><br />";
$dd = $resultt->zipcode;
  $zip = DB::table('zip_code')->where('zip_code', '=', $dd)->get();
  foreach ($zip as $key => $valuee) {
      $profile_id=$resultt->id;
          
         $profile_pic = DB::table('profile_pictures')->where('profile_id', '=', $profile_id)->first();

         $latitude = $valuee->lat;
    $longitude = $valuee->lon;
 
               $latlang[]=array( 'lat'=>$latitude, 'lng'=>$longitude );
           

$content= $resultt->name."<br />".
 "<a href=/search/get-details/id/".$resultt->id.">Details</a><br />".
 "<img src='user_images/".$profile_pic."' height='150' width='200' />";

 
 $data[]='{latLng:['.$latitude.', '.$longitude.'], data:"'.$content.'"}';
  }
  endforeach;
}
 
 if(isset($data))
  $valuesData=implode(',',$data);
?>

    
    <script type="text/javascript">
        
              $(function(){
      
        $('#test').gmap3({
          map:{
            options:{
              center:[<?php  if(isset($latlang)) echo $latlang[0]['lat']." , ".$latlang[0]['lng']; ?>],
              zoom: 4
            }
          },
          marker:{
            values:[
            <?php  if(isset($valuesData)) echo $valuesData; ?>
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
<div id="test" class="gmap3"></div>

 
@endsection
