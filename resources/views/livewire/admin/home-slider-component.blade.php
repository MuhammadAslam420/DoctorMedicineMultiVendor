<div class="main-content">
        <section class="section">
          
         
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>All HomePage Sliders</h4>
                  <div class="row">
                   
                   <div class="col-12">
                       <a href="{{route('admin.addhomeslider')}}" class="btn btn-success pull-right">Add Slider</a>

                  </div>
               </div>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                  <table >
                        <thead>
                             <tr>
                                 <th class="p-2 text-center">
                                     Id
                                 </th >
                                 <th class="p-2 text-center">
                                     Slide Image
                                 </th >
                                 <th class="p-2 text-center">
                                   Title
                                 </th>
                                 <th class="p-2 text-center">
                                    SubTitle
                                 </th>
                                 <th class="p-2 text-center">
                                    Link
                                 </th>
                                 <th class="p-2 text-center">
                                   Status

                                 </th>
                                 <th class="p-2 text-center">
                                   Price

                                 </th>
                                 <th class="p-2 text-center">
                                  Date

                                 </th>
                                
                                 <th class="p-2 text-center">
                                   Action

                                 </th>
                             </tr>
                         <thead>
                             @foreach($sliders as $slider)
                             <tr>
                                 <td class="p-2 text-center">{{$slider->id}}</td>
                                 
                                 <td class="p-2 text-center"><img src="{{asset('images/slider')}}/{{$slider->image}}" style="width:50px; height:50px;"></td>
                                 <td class="p-2 text-center" style="font-size:11px;">{{$slider->title}}</td>
                                 <td class="p-2 text-center" style="font-size:11px;">{{$slider->subtitle}}</td>
                                 <td class="p-2 text-center" style="font-size:11px;">{{$slider->link}}</td>
                                 <td class="p-2 text-center">{{$slider->status}}</td>
                                 <td class="p-2 text-center">{{$slider->price}}</td>
                                 <td class="p-2 text-center"  style="font-size:11px;">{{$slider->created_at}}</td>
                                 <td class="p-2 text-center">
                                 <a href="{{route('admin.edithomeslider',['slider_id'=>$slider->id])}}" class="btn"><i class="fa fa-edit fa-2x text-info"></i></a>
                                        <a href="#" wire:click.prevent="deleteSlider({{$slider->id}})" class="btn"><i class="fa fa-times fa-2x text-danger"></i></a></td>
                             </tr>
                             @endforeach
                         
                         
                     </table>
                     
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </section>
        
      </div>
