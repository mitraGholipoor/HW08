document.getElementById("info").style.display = 'block';
document.getElementById("contact_us").style.display = 'none';
document.getElementById("achievment").style.display = 'none';
document.getElementById("skill").style.display = 'none';









function show_info(){
    document.getElementById("info").style.display = 'block';
    document.getElementById("contact_us").style.display = 'none';
    document.getElementById("achievment").style.display = 'none';
    document.getElementById("skill").style.display = 'none';
}



function show_achievment(){
    document.getElementById("info").style.display = 'none';
    document.getElementById("contact_us").style.display = 'none';
    document.getElementById("achievment").style.display = 'block';
    document.getElementById("skill").style.display = 'none';
}



function show_skill(){
    document.getElementById("info").style.display = 'none';
    document.getElementById("contact_us").style.display = 'none';
    document.getElementById("achievment").style.display = 'none';
    document.getElementById("skill").style.display = 'block';
}




function show_contact_us(){
    document.getElementById("info").style.display = 'none';
    document.getElementById("contact_us").style.display = 'block';
    document.getElementById("achievment").style.display = 'none';
    document.getElementById("skill").style.display = 'none';
}



function submit() {
    var txt;
    if (confirm("آیا از درستی اطلاعات خود مطمئن هستید؟")) {
            document.getElementById("form").submit();
            alert("پیام شما ارسال شد !");
    } 
  }