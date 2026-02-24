<?php
// Simple Backend
$msg = "";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $msg = "Registration Successful for $name!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Internship Registration Portal</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>

/* ================= VARIABLES ================= */

:root{

--indigo:#4f46e5;
--teal:#14b8a6;
--glass:rgba(255,255,255,0.15);
--border:rgba(255,255,255,0.3);
--white:#ffffff;
--dark:#0f172a;

--space-sm:0.8rem;
--space-md:1.5rem;
--space-lg:2.5rem;

--radius:16px;
}

/* ================= RESET ================= */

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

/* ================= BODY ================= */

body{
min-height:100vh;
background:linear-gradient(135deg,var(--indigo),var(--teal));
display:flex;
justify-content:center;
align-items:center;
padding:20px;
}

/* ================= LAYOUT ================= */

.container{
width:100%;
max-width:1100px;
display:grid;
grid-template-columns:1fr 1fr;
background:var(--glass);
backdrop-filter:blur(15px);
border:1px solid var(--border);
border-radius:var(--radius);
overflow:hidden;
box-shadow:0 30px 60px rgba(0,0,0,0.3);
}

/* ================= IMAGE ================= */

.image-box{
background:url('https://images.unsplash.com/photo-1498050108023-c5249f4df085')
center/cover no-repeat;
position:relative;
}

.image-box::after{
content:"";
position:absolute;
inset:0;
background:rgba(15,23,42,0.6);
}

.image-content{
position:absolute;
bottom:30px;
left:30px;
color:white;
z-index:1;
}

.image-content h2{
font-size:clamp(1.5rem,3vw,2.3rem);
}

.image-content p{
opacity:0.8;
}

/* ================= FORM ================= */

.form-box{
padding:var(--space-lg);
color:white;
}

.form-box h2{
text-align:center;
margin-bottom:var(--space-md);
font-size:clamp(1.5rem,3vw,2rem);
}

/* ================= INPUT ================= */

.field{
position:relative;
margin-bottom:var(--space-md);
}

.field input,
.field select{
width:100%;
padding:12px;
background:transparent;
border:none;
border-bottom:2px solid var(--border);
color:white;
font-size:1rem;
outline:none;
}

.field label{
position:absolute;
top:50%;
left:0;
transform:translateY(-50%);
color:#ddd;
pointer-events:none;
transition:0.3s;
}

/* Floating Effect */

.field input:focus + label,
.field input:valid + label,
.field select:focus + label,
.field select:valid + label{
top:-8px;
font-size:0.8rem;
color:var(--teal);
}

/* Focus Border */

.field input:focus,
.field select:focus{
border-bottom:2px solid var(--teal);
}

/* ================= BUTTON ================= */

.btn{
margin-top:20px;
width:100%;
padding:12px;
background:transparent;
border:2px solid var(--teal);
color:white;
font-size:1rem;
border-radius:30px;
cursor:pointer;
transition:0.4s;
position:relative;
overflow:hidden;
}

/* Neon Glow */

.btn:hover{
background:var(--teal);
color:var(--dark);
box-shadow:
0 0 5px var(--teal),
0 0 15px var(--teal),
0 0 30px var(--teal);
}

/* ================= MESSAGE ================= */

.success{
text-align:center;
background:rgba(20,184,166,0.3);
padding:10px;
border-radius:8px;
margin-bottom:15px;
}

/* ================= RESPONSIVE ================= */

@media(max-width:768px){

.container{
grid-template-columns:1fr;
}

.image-box{
height:250px;
}

}

</style>
</head>

<body>

<div class="container">

<!-- LEFT -->

<div class="image-box">

<div class="image-content">
<h2>Join Our Internship</h2>
<p>Learn • Build • Grow</p>
</div>

</div>

<!-- RIGHT -->

<div class="form-box">

<h2>Internship Registration</h2>

<?php if($msg!=""){ ?>
<div class="success"><?php echo $msg; ?></div>
<?php } ?>

<form method="post">

<div class="field">
<input type="text" name="name" required>
<label>Full Name</label>
</div>

<div class="field">
<input type="email" name="email" required>
<label>Email Address</label>
</div>

<div class="field">
<select name="course" required>
<option value="" disabled selected></option>
<option>Web Development</option>
<option>Data Science</option>
<option>AI & ML</option>
<option>Cloud Computing</option>
</select>
<label>Select Domain</label>
</div>

<button class="btn" name="submit">
Submit Application
</button>

</form>

</div>

</div>

</body>
</html>