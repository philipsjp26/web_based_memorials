       <!-- Modal -->
       <div class="modal fade" id="exampleModalImages" tabindex="-1" role="dialog"
           aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" style="max-width: 500px" role="document">
               <div class="modal-content">
                   <div style="padding: 1rem 1rem; display: flex; align-items: center;" class="modal-header">
                       <h5 style="font-size: 1.25rem" class="modal-title" id="exampleModalLabel">Edit
                           Memorials
                       </h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body">

                       <form action="/memorial/add/images/{{ $data->id ?? '' }}" method="POST"
                           enctype="multipart/form-data">
                           @csrf
                           @method('POST')
                           <div class="form-group">
                               <div class="col" id="dynamicField">
                                   <label class="col-form-label"><span class="text-danger">*</span>
                                       Images</label>
                                   <input type="file" name="image[]" class="form-control" required multiple>
                               </div>
                           </div>
                           <a href="#" id="add">Add More</a>
                           <button type="submit" class="btn btn__primary" data-dismiss="modal">
                               Add</button>
                       </form>
                   </div>
               </div>
           </div>
       </div>
       <!-- Quick view modal end -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <script type="text/javascript">
           $(document).ready(function() {
               var i = 1;

               $('#add').click(function() {
                   i++;
                   $('#dynamicField').append(
                       '<div class="col"><label class="col-form-label"></label><input type="file" name="image[]" class="form-control"></div>'
                   )
               })
           })
       </script>
