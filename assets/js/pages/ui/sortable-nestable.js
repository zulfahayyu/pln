$(function () {
    $('.dd').nestable();

    $('.dd').on('change', function () {
        var $this = $(this);
        var serializedData = window.JSON.stringify($($this).nestable('serialize'));
        data = (JSON.parse(serializedData));
        $this.parents('div.body').find('textarea').val(serializedData);
        var area = $(this).data("area");
        // 
        data.forEach(function (key) {
            $.ajax({
                url: base_url + '/proses/model_task.php?method=ajax_change_satus&id=' + key['id'] +'&value='+area,
                type: 'GET',
                success: function (result) {
                    console.log(result);
                }
            });

        });
    });

});