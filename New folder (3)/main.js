function cal()
{
    var maths = document.getElementById('maths').value;
    var science = document.getElementById('science').value;
    var computer = document.getElementById('computer').value;
    var social = document.getElementById('social').value;
    var english = document.getElementById('english').value;

    if(maths=='' || science=='' || computer=='' || social=='' || english=='')
    {
        alert('Please fill marks for all subjects!');
    }
    else
    {
        var total = Number(maths)+Number(science)+Number(computer)+Number(social)+Number(english);
        var per = (total/500)*100;

        document.getElementById('total').value=total;
        document.getElementById('per').value=per;
    }
}