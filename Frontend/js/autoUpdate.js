<script type='text/javascript'>
$(document).ready(function(){
    function getData(){
        $.ajax({
            type:'POST',
            url:'../php/interaction_with_jq.php',
            dataType: 'json',
            data: ({name: 'BTC', type: 'cash'}),
            success: function(data){
                $('#btc_cash').html(data);
            }
        });
    }
    getData();
    setInterval(function () {
        getData();
    }, 10000); // For now update every 10 seconds to see if it's working
});

</script>

