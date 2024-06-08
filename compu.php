<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Status</title>
<style>
.container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  transform: translate(50px,140px);
}

label {
  font-weight: bold;
}

input, select {
  margin-bottom: 10px;
}

button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

</style>
</head>
<body>
<div class="container">
  <h2>Approve Status</h2>
  <form id="statusForm">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id" required><br><br>
    <label for="status">Status:</label>
    <select id="status" name="status">
      <option value="approve">Approve</option>
      <option value="disapprove">Disapprove</option>
    </select><br><br>
    <button type="button" onclick="updateStatus()">Update Status</button>
  </form>
  <p id="statusMessage"></p>
</div>
<script>
    function updateStatus() {
  var id = document.getElementById('id').value;
  var status = document.getElementById('status').value;

  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'update_status.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.onload = function() {
    if (xhr.status == 200) {
      document.getElementById('statusMessage').innerHTML = xhr.responseText;
    }
  };
  xhr.send('id=' + id + '&status=' + status);
}

</script>
</body>
</html>
