@extends('layouts.editor')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  page
                </div>
                <center><a href="/">back</a>
            </div>
        </div>
    </div>
</div>



<div class="container">
<center>
<form action="/form" method="POST">

<input type="text" class="in"  name="Название" value="Название" ><span> название</span><br>
<input type="text" class="in"  name="Описание" value="Описание"  ><span> описание</span><br>
<input class="in" type="text" name="Цена" value="250" >   <span> цена </span><br>
{{ csrf_field() }}
<br><?php echo Form::file('image') ; ?><br>
<input type="submit" value="предпросмотр">


<div class="item">
			<p></p>
			<input type="checkbox" id="toggle_today_summary" name="btc" value="btc">
			<div class="toggle">
				<label for="toggle_today_summary"><i>btc</i></label>
			</div>
		</div>
		<div class="item">
			<p></p>
			<input type="checkbox" id="toggle_calendar_day_view" name="" value="">
			<div class="toggle">
				<label for="toggle_calendar_day_view"><i>pmc</i></label>
			</div>
		</div>
		<div class="item">
			<p></p>
			<input type="checkbox" id="toggle_reminders" name="" value="">
			<div class="toggle">
				<label for="toggle_reminders"><i>eth</i></label>
			</div>
		</div>

</form>
</center>
</div>

<?php if($_SERVER['REQUEST_METHOD'] == 'POST' && (count($_POST) > 0)) 
 {	
    $n = $_POST['Название'];
    $p = $_POST['Описание'];
    $c = $_POST['Цена'];
    $v = $_POST['image'];

/////////////////////////////////
echo '<center>';
echo '<div style="margin-top:50px;">';
echo '<div class="iphone-6 space-gray">';
echo '<div class="header"></div><div class="pnl"></div>';
echo '<div>';
echo "<p class='title'>{$n}</p>";
echo '</div>';
echo '<div>';
echo "<p class='title'>{$n}</p>";
echo '</div>';
echo '<div>';
echo "<p class='title'>{$p}</p>";
echo '</div>';
echo '<div>';
echo "<p class='title'>{$c}</p>";
echo '</div>';
echo '</div>';echo '</center>';}else{}?>
@endsection
