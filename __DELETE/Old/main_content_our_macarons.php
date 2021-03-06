<?php
$holidayArray = [
    '5/27'=>'christmas',
    '7/4'=>'july4th',
    '12/25'=>'christmas'
];
$date = date('n/j');
//$date = '12/25';
foreach($holidayArray as $key=>$value){
    if($date == $key)
        $today2 = $value.'_heading';
}
?>
<article class="our-macarons-main-content">
    <section class="section-main-content-classics">
        <section class="section-main-content-fresh">
            <h1 class="section-title  <?=$today2;?>" id="our-macacrons-fresh-para-title">Our macarons are freshly made by hand</h1>
            <p class="para-style para-fresh"> The vivid hues of our unique macarons reflect the natural flavors and essences
                that infuse the ganache filling of these delicious almond cookies – each has its own personality, and all
                of them are made to savour for their delicacy and unique character.
            </p>
        </section>
        <!--End subsection main content -freshly made-->
        <h1 class="section-title  <?=$today2;?>" id="our-macacrons-classics-para-title">Classics</h1>
        <ul class="para-style classics">
            <li>caribbean chocolate</li>
            <li>coconut</li>
            <li>colombian coffee</li>
            <li>green tea</li>
            <li>lemon</li>
            <li>madagascar vanilla</li>
            <li>passion fruit</li>
            <li>rose</li>
            <li>raspbery</li>
            <li>tiffany blue</li>
            <li>sicilian pistachio</li>
            <li>sweet wedding almond</li>
            <li>violet cassis</li>
            <li>salted caramel</li>
        </ul>
    </section>
    <!--End section main content -classics list-->
    <section class="section-main-content-after-purchase">
        <p class="para-style para-after-purchase">After purchase we recommend keeping macarons in the refrigerator;
            let them come to room temperature before serving - about 10 minutes. For best degustation, our macarons
            should be consumed within 3 days.</p>
    </section>
    <!--End section main content -after purchase-->
</article>
<!--End main-content-->