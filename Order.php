<head>
  <meta charset="UTF-8">
  <title>Order</title>
</head>

<form action="order_submit.php" method="post">
<fieldset><h1>MY ORDER</h1></fieldset>

  <p class="quantity"><label for="quantity"> Quantity</label>
    <input type="number" id="quantity" name="quantity" min="1" max="10"></p>
    <p class="food"><label for="food items"> food items:</label>

    <select id="simple" name="food items">
  <option value="Cookie">Cookie</option>
  <option value="Cake">Cake</option>
  <option value="Croissant">Croissant</option>
  <option value="Muffin">Muffin</option>
  <option value="Cake">Cake</option>
</select>

</p>

<label> Quantity: </label>
<input type="text" name="Quantity" size="15"/>
 <br> <br>

<p class="button">
  <button type="submit">ORDER</button>
</p>
</form>
</html>