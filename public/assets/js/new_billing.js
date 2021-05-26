$(document).ready(function(){

    $("#billing-form").on('submit', function(e){
        e.preventDefault();
        
        let registerForm = document.getElementById('billing-form')
        let actionURI = registerForm.getAttribute('action')

        
        if($('#reading_date').val() != '')
        {
            $('#save-billing').html('<i class="far fa-spinner fa-spin"></i>&nbsp; Processing ...');
            $('#current-month').prop('disabled', false);
            $('#next-month').prop('disabled', false);

            let data = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: actionURI,
                data: data,
                success: function(response){
                    console.log(response)
                    if(response.created == true){
                        $('#current-month').prop('disabled', true);
                        $('#next-month').prop('disabled', true);

                        Swal.fire('Great!','New billing for client '+ $('input[name="customer_id"]').val() +' was created!','success').then(function(result){
                            if(result.isConfirmed)
                            {
                                window.location.reload();
                            }
                        })
                    }
                    else{
                        Swal.fire('Ooops!',"There was an error on saving the consumer's bill!")
                    }
                }
            })
        }
        else
        {
            Swal.fire('Ooops!','Please select reading date first!','error');
        }

    });

    $('#reading_meter').on('keyup', function(){
        if(parseFloat($(this).val()) > parseFloat($('#meter-reading').val()))
        {
            const max_range = parseFloat($('input[name="max_range"]').val());
            const min_rates = parseFloat($('input[name="min_rates"]').val());
            const excess_rate = parseFloat($('input[name="excess_rate"]').val());
            const payment_or = $('input[name="or_num"]').val();
            const balance = parseFloat($('input[name="cur_balance"]').val());
            const surcharge_rate = parseFloat($('input[name="surcharge"]').val());
            const meter_ips = parseFloat($('input[name="meter_ips"]').val());

            const surcharge = (payment_or != null ? (balance * surcharge_rate) : 0.00);

            const meter_consumption = parseFloat($(this).val()) - parseFloat($('#meter-reading').val());
            const total_consumption = ((meter_consumption - max_range) * excess_rate) + min_rates;
            const amount_consumption = meter_consumption <= max_range ? min_rates : total_consumption;
            
            $('#consumption').val(meter_consumption);
            $('#surcharge_amount').val(surcharge);
            $('#amount').val(amount_consumption);

            const total = ((surcharge + balance) + (meter_ips + amount_consumption));

            $('#total').val(total);
            $('#save-billing').prop('disabled', false);
        }
        else{
            console.log('error')
        }
    });

    const btnAllowOverrride = document.querySelector('#allow');
    const checkbox = document.querySelector('#override');
    btnAllowOverrride.onclick = () => {
        if(checkbox.checked){
            $('#current-month').prop('disabled', false);
            $('#next-month').prop('disabled', false);
        }
    }

});