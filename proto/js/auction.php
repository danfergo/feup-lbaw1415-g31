<?php
    include "../config/init.php";
    require_once "$BASE_DIR/database/auctions.php";

    header('Content-Type: application/javascript; charset=utf-8');

    $cats = getCategories('all',false);
    echo "AUCTION_CATEGORIES = new Array();\n";
    foreach($cats as $cat){
        echo "AUCTION_CATEGORIES[{$cat['category_id']}] = " . json_encode(getCategoryCharacteristics($cat['category_id'])) . ";\n";
    }
    echo "\n";
?>
$('#auction-category-selector').on('change',function(){
    $selector = $(this);
    $characteristicsInputSection = $('#characteristics-inputs-section');
    characteristicInputTemplate = $('#characteristic-form-group-template').html();
    $characteristicsFieldset = $('#characteristics-fieldset');

    currentCategory = $selector.val();
    $characteristicsInputSection.html('');
    $characteristicsFieldset.hide();

    if(currentCategory != "")AUCTION_CATEGORIES[currentCategory].forEach(function(characteristic,index,array){
        $inputBlock = $(characteristicInputTemplate);
        $inputBlock.find('label').html(characteristic.name);

        switch(characteristic.type){
            case 'enum':
                multiple = characteristic.min != 1 || characteristic.max != 1;
                for (var option in characteristic.options){
                         $inputBlock.find('.input-area').append('<div class="'+ (multiple ? 'checkbox' : 'radio') + '">\
                                    <label><input type="'+ (multiple ? 'checkbox' : 'radio') + '" \
                                    name="ch_'+characteristic.id+ (multiple ? '[]' : '') + '" \
                                    value="'+option+'">'+characteristic.options[option]+'</label></div>');
                }

                break;
            case 'num':
                $inputBlock.find('.input-area').html('<input type="number" class="form-control"\
                                                            name="ch_'+characteristic.id+'"\
                                                            step="'+characteristic.precision+'"\
                                                            min="'+characteristic.min+'"\
                                                            max="'+characteristic.max+'"\
                                                            placeholder="'+characteristic.units+'">');
                break;
        }

        $characteristicsInputSection.append($inputBlock);
    });
    if(currentCategory != "" || AUCTION_CATEGORIES[currentCategory].length > 0){
        $characteristicsFieldset.show();
    }
});


$("#photos-input").fileinput({
    language: 'pt',
    uploadUrl: "/leiloes/proto/api/auction-prev.php",
    uploadAsync: true,
    minFileCount: 1,
    maxFileCount: 5,
showRemove: false,
overwriteInitial: false
    /*initialPreview: [
     "<img src=\'http://placeimg.com/200/150/nature/1\'>",
     "<img src=\'http://placeimg.com/200/150/nature/2\'>",
     ],
     initialPreviewConfig: [
     {caption: "Food-1.jpg", url: "/leiloes/proto/api/auction-prev.php", key: 1},
     {caption: "Food-2.jpg", url: "/leiloes/proto/api/auction-prev.php", key: 2},
     ] */
});


$("#photos-input").on("filepredelete", function() {
    var abort = true;
    if (confirm("Are you sure you want to delete this image?")) {
        abort = false;
    }
    return false;
});

