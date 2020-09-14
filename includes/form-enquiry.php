<!-- Ajax Form -native without a form plugin -->
<div id="success_message" class="alert alert-success" style="display:none;"></div>
<div id="error_message" class="alert alert-error" style="display:none;"></div>

<form id="enquiry">

    <h2>Send us a message about <?php the_title();?> </h2>


    
    <input type="hidden" name="registration" value="<?php the_field('registration');?>">


    <div class="form-group row">
        <div class="col-lg-6">

            <input type="text" name="fname" placeholder="First Name" required>

        </div>
        <div class="col-lg-6">

            <input type="text" name="lname" placeholder="Last Name" required>

        </div>
    </div>


    <div class="form-group row">
        <div class="col-lg-6">

            <input type="text" name="email" placeholder="Email Address" class="form-control" required>

        </div>
        <div class="col-lg-6">

            <input type="tel" name="phone" placeholder="Phone" class="form-control" required>

        </div>

    </div >

    <div class="form-group">
        <textarea name="enquiry" class="form-control" placeholder="Your Message" required></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">Send Your Message</button>
    </div>
        

</form>

<script>

(function($){

    $('#enquiry').submit( function(event){

    event.preventDefault();

    var endpoint = '<?php echo admin_url('admin-ajax.php');?>';

    var form = $('#enquiry').serialize();

    var formdata = new FormData;

    formdata.append('action', 'enquiry');
    formdata.append('enquiry', form);

    $.ajax(endpoint, {

        type:'post',
        data:formdata,
        processData: false,
        contentType: false,


        success: function(res){
            $('#enquiry').fadeOut(200);
            $('#success_message').text('Thanks for your enquiry').show();
            $('#enquiry').trigger('reset');
            $('#enquiry').fadeIn(3000);
            $('#success_message').fadeOut(12000);
        },

        error: function(err){
            $('#error_message').text('Sorry please Try Again').show();
        }

    })


    })

})(jQuery)   



</script>