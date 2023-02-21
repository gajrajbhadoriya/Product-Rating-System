<html>
  <head>
    <title>Rating-System</title>
    <style>
      table {
        text-align: center;
        border: 3px solid green;
      }
    </style>
  </head>
  <body>
    <form action="" method="post">
      <a><h1>Rate-Product</h1></a>
      <table>
        <tbody>
        <tr>
          <td>Username</td>
          <td>
            <input type="text" name="username" placeholder="Enter first number" />
          </td>
        </tr>
        <tr>
          <td>
            <select name="product_name">
              <option value="">Product_name</option>
              <option value="samsung">Samsung</option>
              <option value="nokia">Nokia</option>
              <option value="redmi">Redmi</option>
              <option value="apple">Apple</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <select name="rating">
              <option value="">Rating</option>
              <option value="bad">Bad</option>
              <option value="good">Good</option>
              <option value="average">Average</option>
              <option value="verygood">Very Good</option>
            </select>
          </td>
        </tr>
        <tr>
        <td>feedback</td>
          <td>
            <input type="textarea" name="feedback" placeholder="feedback" />
          </td> 
        </tr>
        <tr>
          <td>
            <button type="submit" name="submit">Submit</button>
          </td>
        </tr>
        </tbody>
      </table>
	 <td><a class="btn btn-warning" href="read.php">View All Records</a>
    </form>
  </tbody>
</html>
