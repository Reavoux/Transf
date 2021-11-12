
<link rel="stylesheet" href="MindMap/mindmap.css">

<div class="mindmap">

<ol class="children children_leftbranch">
<li class="children__item">
<div class="node">
<div class="node__text">Fina haut</div>
<input type="text" class="node__input">
</div>

<ol class="children">
<li class="children__item">
<div class="node">
<div class="node__text">Houss 1/2</div>
<input type="text" class="node__input">
</div>
</li>

<li class="children__item">
<div class="node">
<div class="node__text">François 1/2</div>
<input type="text" class="node__input">
</div>
</li>
</ol>


<li class="children__item">
<div class="node">
<div class="node__text">Fina Bas</div>
<input type="text" class="node__input">
</div>

<ol class="children">
<li class="children__item">
<div class="node">
<div class="node__text">Frédérick 1/2</div>
<input type="text" class="node__input">
</div>
</li>



<li class="children__item">
<div class="node">
<div class="node__text">Romain 1/2</div>
<input type="text" class="node__input">
</div>
</li>
</ol>
</li>
</ol>


<div class="node node_root">
<div class="node__text">Finale</div>
<input type="text" class="node__input">
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>

$(function(){
	$('.mindmap').mindmap();
});

</script>
