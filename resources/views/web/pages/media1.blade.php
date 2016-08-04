<div class="controls">
  <label>Filter:</label>
  
  <button class="filter" data-filter="all">All</button>
  <button class="filter" data-filter=".category-1">Print</button>
  <button class="filter" data-filter=".category-2">Category 2</button>
  
  <label>Sort:</label>
  
  <button class="sort" data-sort="myorder:asc">Asc</button>
  <button class="sort" data-sort="myorder:desc">Desc</button>
</div>
<div id="Container" class="container">
  <div class="mix category-1" data-myorder="1"></div>
  <div class="mix category-1" data-myorder="2"></div>
  <div class="mix category-1" data-myorder="3"></div>
  <div class="mix category-2" data-myorder="4"></div>
  <div class="mix category-1" data-myorder="5"></div>
  <div class="mix category-1" data-myorder="6"></div>
  <div class="mix category-2" data-myorder="7"></div>
  <div class="mix category-2" data-myorder="8"></div>
  
  <div class="gap"></div>
  <div class="gap"></div>
</div>
<style type="text/css">
  *{
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body, button{
  font-family: 'Helvetica Neue', arial, sans-serif;
}

.controls{
  padding: 2%;
  background: #333;
  color: #eee;
}

label{
  font-weight: 300;
  margin: 0 .4em 0 0;
}

button{
  display: inline-block;
  padding: .4em .8em;
  background: #666;
  border: 0;
  color: #ddd;
  font-size: 16px;
  font-weight: 300;
  border-radius: 4px;
  cursor: pointer;
}

button.active{
  background: #68b8c4;
}

button:focus{
  outline: 0 none;
}

button + label{
  margin-left: 1em;
}

.container{
  padding: 2% 2% 0;
  text-align: justify;
  font-size: 0.1px;
  background: #68b8c4;
  
  -webkit-backface-visibility: hidden;
}

.container:after{
  content: '';
  display: inline-block;
  width: 100%;
}

.container .mix,
.container .gap{
  display: inline-block;
  width: 49%;
}

.container .mix{
  text-align: left;
  background: #03899c;
  margin-bottom: 2%;
  display: none;
}

.container .mix.category-1{
  border-top: 2px solid limegreen;
}

.container .mix.category-2{
  border-top: 2px solid yellow;
}

.container .mix:after{
  content: attr(data-myorder);
  color: white;
  font-size: 16px;
  display: inline-block;
  vertical-align: top;
  padding: 4% 6%;
  font-weight: 700;
}

.container .mix:before{
  content: '';
  display: inline-block;
  padding-top: 60%;
}

@media all and (min-width: 420px){
  .container .mix,
  .container .gap{
    width: 32%;
  }
}

@media all and (min-width: 640px){
  .container .mix,
  .container .gap{
    width: 23.5%;
  }
}
</style>
<script src="{{url('assets/front/js/jquery-1.9.1.min.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
<script type="text/javascript">
  $(function(){
  $('#Container').mixItUp();
});
</script>