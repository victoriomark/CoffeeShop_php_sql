const GetRegistered = () =>{    const Password = document.getElementById('Password');    const UserName = document.getElementById('UserName');    const sign_up_btn = document.getElementById('sign_up_btn');    sign_up_btn.addEventListener('click',() =>{        $.ajax({            url: '../Model/Register_customer.php',            type: 'post',            data:{                Password: Password.value,                UserName: UserName.value            },            success: function (data,status){                const error_con = document.getElementById('error_con');                error_con.innerHTML = data;                if(data === 'Successfully Registered'){                    location.href = 'Login.php'                }                Password.value = ''                UserName.value =  ''            }        })    })}GetRegistered()