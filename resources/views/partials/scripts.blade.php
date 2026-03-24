<!-- jQuery -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- jQuery Easing (Required for SB Admin) -->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- SB Admin Script -->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>

<script>
  $(document).ready(function(){
    $.get('/generate-hospital-no', function(response){
      $('input[name="hospital_no"]').val(response.hospital_no);
    });
  });
</script>

<script>
  $(document).ready(function(){

      $('#state_id').on('change', function(){
          let state_id = $(this).val();

          $('#lga_id').html('<option>Loading...</option>');

          if(state_id){
              $.ajax({
                  url: '/get-lgas/' + state_id,
                  type: 'GET',
                  success: function(data){

                      let options = '<option value="">Select LGA</option>';

                      data.forEach(function(lga){
                          options += `<option value="${lga.id}">${lga.name}</option>`;
                      });

                      $('#lga_id').html(options);
                  }
              });
          } else {
              $('#lga_id').html('<option value="">Select LGA</option>');
          }
      });

  });
</script>

<script>
  $(document).ready(function() {
      $('.select2').select2({
          placeholder: "Select an option",
          allowClear: true,
          width: '100%'
      });
  });
</script>