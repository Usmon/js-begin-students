<h3>News page</h3>
<?php for($index = 1; $index <=10; $index++): ?>
<div style="width: 100%; height: 250px">
    <h4>Title <?= $index ?></h4>

        <img style="float: left" src="https://images.pexels.com/photos/248797/pexels-photo-248797.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500" alt="">

    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
    <br>
    <a class="more-view-btn" data-id="<?=$index?>" href="#">More view</a>
</div>
<?php endfor; ?>

<div id="pagination">
    <ul><li><a href="#">1</a></li></ul>
    <ul><li><a href="#">2</a></li></ul>
    <ul><li><a href="#">3</a></li></ul>
    <ul><li><a href="#">...</a></li></ul>
</div>
