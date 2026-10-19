<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Enrollment System</title>
<style>
* { box-sizing: border-box; font-family: 'Segoe UI', Arial, sans-serif; }
body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 20px; margin: 0; }
.container { max-width: 1300px; margin: auto; background: rgba(255,255,255,0.95); padding: 30px; border-radius: 20px; box-shadow: 0 8px 32px rgba(0,0,0,0.2); }
h1 { text-align: center; color: #2c3e50; margin-bottom: 24px; }
.form-group { margin-bottom: 18px; }
label { display: block; font-weight: 600; margin-bottom: 8px; color: #34495e; }
input[type="text"], input[type="file"] { width: 100%; padding: 12px; border: 2px solid #e0e6ed; border-radius: 10px; background: #f8f9fa; }
.img-preview { display: flex; gap: 20px; margin: 15px 0; justify-content: center; flex-wrap: wrap; }
.img-preview div { text-align: center; }
.img-preview img { width: 130px; height: 130px; object-fit: cover; border-radius: 12px; border: 3px dashed #bdc3c7; background: #ecf0f1; }
.img-preview img.has-img { border: 3px solid #667eea; box-shadow: 0 4px 12px rgba(102,126,234,0.3); }
.img-preview span { font-size: 13px; color: #7f8c8d; display: block; margin-top: 6px; }
button { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 14px 20px; border: none; border-radius: 10px; cursor: pointer; font-size: 16px; width: 100%; font-weight: 600; }
.table-wrapper { overflow-x: auto; margin-top: 35px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); }
table { width: 100%; min-width: 900px; border-collapse: separate; border-spacing: 0; background: white; }
th, td { padding: 14px 12px; text-align: center; }
th { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; font-weight: 600; position: sticky; top: 0; }
tr:nth-child(even) { background: #f8f9fa; }
td img { width: 60px; height: 60px; object-fit: cover; border-radius: 8px; border: 2px solid #e0e6ed; cursor: pointer; }
.actions button { width: auto; padding: 8px 14px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
.modal { display: none; position: fixed; z-index: 100; left: 0; top: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); justify-content: center; align-items: center; }
.modal.active { display: flex; }
.modal img { max-width: 90%; max-height: 90%; border-radius: 12px; }
</style>
</head>
<body>
<div class="container">
<h1>Student Enrollment System</h1>
<form id="enrollForm">
<div class="form-group"><label>Full Name</label><input type="text" id="studentName" required></div>
<div class="form-group"><label>Course</label><input type="text" id="course" required></div>
<div class="form-group"><label>Cellphone No.</label><input type="text" id="cellphoneNo" required></div>
<div class="form-group"><label>Profile Image</label><input type="file" id="profileImg" accept="image/*" required></div>
<div class="form-group"><label>Grade 12 Card Image</label><input type="file" id="cardImg" accept="image/*" required></div>
<div class="form-group"><label>Good Moral Certificate</label><input type="file" id="goodMoralImg" accept="image/*" required></div>
<div class="img-preview">
<div><img id="profilePreview"><span>Profile Preview</span></div>
<div><img id="cardPreview"><span>Grade 12 Card Preview</span></div>
<div><img id="goodMoralPreview"><span>Good Moral Preview</span></div>
</div>
<button type="submit">Enroll Student</button>
</form>
<div class="table-wrapper">
<table id="studentTable"><thead><tr><th>Profile</th><th>Grade 12 Card</th><th>Good Moral</th><th>Name</th><th>Course</th><th>Cellphone No.</th><th>Action</th></tr></thead><tbody></tbody></table>
</div>
</div>
<div class="modal" id="imgModal" onclick="closeModal()"><img id="modalImg" src="" alt=""></div>

