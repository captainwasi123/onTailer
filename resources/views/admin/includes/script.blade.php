<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{URL::to('/public/admin')}}/js/bootstrap.min.js"> </script>
<script src="{{URL::to('/public/admin')}}/js/functions.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/4.7.3/d3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{URL::to('/public/admin')}}/js/dev.js"> </script>
@if(session()->has('success'))
 <script type="text/javascript">
    $(document).ready(function(){
       Swal.fire("Success!", "{{ session()->get('success') }}", "success");
    });
 </script>
@elseif(session()->has('error'))
 <script type="text/javascript">
    $(document).ready(function(){
       Swal.fire("Alert!", "{{ session()->get('error') }}", "warning");
    });
 </script>
@endif