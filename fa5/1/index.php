<!DOCTYPE html>
<html>
<head>
<title>Personal Information Form</title>

<style>
       body{
           font-family: Arial, sans-serif;
           background: linear-gradient(135deg, #FFE4E1, #FFF9C4);
           display:flex;
           justify-content:center;
           align-items:center;
           min-height:100vh;
       }
       .container{
           width:450px;
           background:white;
           padding:30px;
           border-radius:20px;
           box-shadow:0 4px 15px rgba(0,0,0,0.1);
       }
       h2{
           text-align:center;
           color:#d86c9a;
       }
       label{
           display:block;
           margin-top:12px;
           font-weight:bold;
       }
       input, textarea{
           width:100%;
           padding:10px;
           margin-top:5px;
           border:1px solid #ddd;
           border-radius:10px;
           box-sizing:border-box;
       }
       button{
           width:100%;
           margin-top:20px;
           padding:12px;
           border:none;
           border-radius:10px;
           background:#F8BBD0;
           font-size:16px;
           cursor:pointer;
       }
       button:hover{
           background:#f3a9c4;
       }
</style>
</head>
<body>

<div class="container">

<h2>Personal Information Form</h2>

<form id="personForm" action="display.php" method="POST" novalidate>

<label>First Name</label>
<input type="text" name="fname" id="fname" pattern="[A-Za-z ]+" title="Only letters and spaces allowed" required>

<label>Middle Name</label>
<input type="text" name="mname" id="mname" pattern="[A-Za-z ]+" title="Only letters and spaces allowed" required>

<label>Last Name</label>
<input type="text" name="lname" id="lname" pattern="[A-Za-z ]+" title="Only letters and spaces allowed" required>

<label>Date of Birth</label>
<input type="date" name="dob" required>

<label>Address</label>
<textarea name="address" id="address" rows="4" required></textarea>

<button type="submit">Submit</button>

</form>

<script>

(() => {
    const ids = ['fname', 'mname', 'lname'];
    const nameInvalidRe = /[^A-Za-z ]+/g;
    const addrInvalidRe = /[^A-Za-z0-9 ]+/g;

    ids.forEach(id => {
        const el = document.getElementById(id);
        if (!el) return;
        el.addEventListener('input', () => {
            const cleaned = el.value.replace(nameInvalidRe, '');
            if (cleaned !== el.value) {
                el.value = cleaned;
            }
        });
        el.addEventListener('paste', (e) => {
            e.preventDefault();
            const text = (e.clipboardData || window.clipboardData).getData('text') || '';
            el.value = (el.value + text).replace(nameInvalidRe, '');
        });
    });

    const addr = document.getElementById('address');
    if (addr) {
        addr.addEventListener('input', () => {
            const cleaned = addr.value.replace(addrInvalidRe, '');
            if (cleaned !== addr.value) {
                addr.value = cleaned;
            }
        });
        addr.addEventListener('paste', (e) => {
            e.preventDefault();
            const text = (e.clipboardData || window.clipboardData).getData('text') || '';
            addr.value = (addr.value + text).replace(addrInvalidRe, '');
        });
    }
})();
</script>

</div>

</body>
</html>