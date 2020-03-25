let itemZ = document.querySelectorAll('.aside__list .list__item')
for (let i = 1; i < itemZ.length; i++) {
    itemZ[i].onclick = () => {
        if (itemZ[i].classList.contains('selected')) {
            itemZ[i].classList.remove('selected')
        } else {
            for (let k = 1; k < itemZ.length; k++) {
                itemZ[k].classList.remove('selected')
            }
            itemZ[i].classList.add('selected')
        }

    }
}

let btn = document.querySelector('.cabinet-menu__btn')
btn.onclick = () => {
    document.querySelector('body').classList.toggle('hidden')
    document.querySelector('.cabinet__aside').classList.toggle('done')
}


let el = document.getElementById('checkbox2');
let check = 0;

//const
const Bonus10 = 10000;
const Bonus15 = 15000;
const Bonus20 = 20000;

// validation
let form = document.querySelector('.balance .card-input');
let withdrawalForm = document.querySelector('#withdrawal_form');
let refillForm = document.querySelector('#refill_form');
let balance = document.querySelector('#money');
let input = document.querySelector('#input');
// output
let depositWidget = document.querySelector('#widget__deposit');
let profitWidget = document.querySelector('#widget__profit')
let finalWidget = document.querySelector('#widget__final')
let bonusWidget = document.querySelector('#bonus')
let bonusWidgetWrap = document.querySelector('.widget__bonus-wrap')
let capitalWidget = document.querySelector('#capitalization');
let widgetstatic = document.querySelector('.widget__static');

let balanceAll = document.querySelector('#money');

let symbol = '';
let procent = 5;


const deposit = {
    deposit: 0,
    money: 0,
    bonus: 0,
    procent: 0.012,
    profit: 0,
    days: 1,
    balance: 0,
}
if (form != null) {
    form.onsubmit = () => {
        console.log(+balanceAll.textContent)
        if (+balanceAll.textContent <= 0) {
            console.log('hi');
            return false;
        } else {
            $.post("/deposit", $(form).serialize()).done(
                function (data) {
                    $('#success .bordered').html(data['info'])
                    $('#success .subtitle').html(data['list'])
                    $('#success').modal()
                    let balance = $(balanceAll).html()
                    $(balanceAll).html(+balance - input.value)
                }).fail(function (data) {
                console.log(data.responseText)
                $('#warning .bordered').html(data.responseText)
                $('#warning').modal()
            });
        }
        return false;
    };
}
if (withdrawalForm != null) {
    withdrawalForm.onsubmit = () => {
        $.post("/withdrawal", $(withdrawalForm).serialize()).done(
            function (data) {
                $('#success .bordered').html(data['info'])
                $('#success .subtitle').html(data['list'])
                $('#success').modal()
                $('#modalWithdrawCard').modal('hide');
                return false;
            }).fail(function (data) {
            $('#warning .bordered').html(data.responseText)
            $('#warning').modal()
            $('#modalWithdrawCard').modal('hide');

            return false;
        });

        return false;
    };
}

if (refillForm != null) {
    refillForm.onsubmit = () => {
        $.post("/refill", $(refillForm).serialize()).done(
            function (data) {
                $('#success .bordered').html(data['info'])
                $('#success .subtitle').html(data['list'])
                $('#success').modal()
                $('#refill').modal('hide');
                return false;
            }).fail(function (data) {
                $('#warning .bordered').html(data.responseText)
                $('#warning').modal()
                $('#modalWithdrawCard').modal('hide');

                return false;
            });

        return false;
    };

}

input.oninput = (e) => {

    console.log(parseInt(+e.target.value));
    if (parseInt(+e.target.value)) {
        deposit.deposit = +e.target.value
        symbol = e.target.value.trim();
        let ch = $('input[type=checkbox]').prop('checked');
        calcMoney(+e.target.value, ch, procent);

        reload()
    } else if (e.target.value === '' || e.target.value === NaN) {
        deposit.deposit = 0
        deposit.profit = 0
        symbol = e.target.value.trim()
        calcMoney(0)
        reload()
    }

    e.target.value = symbol
}


reload()

// buttons
let buttons = document.querySelectorAll('.card-button')

for (let i = 0; i < buttons.length; i++) {
    const element = buttons[i];

    element.onclick = () => {

        for (let k = 0; k < buttons.length; k++) {
            buttons[k].classList.remove('card-button-selected')
        }
        element.classList.add('card-button-selected')
        let numb = element.getAttribute('data-number')
        let type = document.getElementById('type');
        type.setAttribute('value', numb);
        console.log(type)

        setData(numb)
    }
}

// расчитывание денег
function calcMoney(inpValue, check = 0, procent) {
    if (parseInt(inpValue)) {
        inpValue = parseInt(+inpValue);
        let formula = ((inpValue * ((deposit.procent + 1) ** deposit.days)) * (deposit.bonus + 1))
        let formula2 = 0;
        console.log(check, "check")
        if (check == 0) {
            if (procent == 5) {
                procent = bonus(inpValue, procent);
                formula2 = (inpValue + (procent * (inpValue / 100)) * 1)
            } else if (procent == 7) {
                procent = bonus(inpValue, procent);
                formula2 = (inpValue + (procent * (inpValue / 100)) * 3)
            } else if (procent == 9) {
                procent = bonus(inpValue, procent);
                formula2 = (inpValue + (procent * (inpValue / 100)) * 6)
            }
        } else {
            if (procent == 5) {
                procent = bonus(inpValue, procent);
                formula2 = (inpValue + (procent * (inpValue / 100)));
            } else if (procent == 7) {
                procent = bonus(inpValue, procent);
                formula2 = parseInt(+inpValue);
                for (let i = 0; i < 3; i++) {
                    formula2 = (formula2 + ((formula2 / 100) * procent));
                    console.log("formula2", formula2);
                }

            } else if (procent == 9) {
                procent = bonus(inpValue, procent);
                formula2 = parseInt(+inpValue);
                for (let i = 0; i < 6; i++) {
                    formula2 = (formula2 + ((formula2 / 100) * procent));
                }
            }

        }

        deposit.profit = formula2 - inpValue;
        console.log(formula2, 'formula2');
        return deposit.money = (formula2).toFixed(2)

    } else {
        return deposit.money = 0

    }
}


function showPresentORAbsent() {
    let check = event.target.checked;
    let inputVal = $('#input').val();
    console.log(inputVal)
    calcMoney(inputVal, check, procent);
    reload()

}


function setData(numb) {
    switch (numb) {
        case '1':
            deposit.bonus = 0
            deposit.days = 1
            // widgetstatic.innerText = '5% в месяц';
            procent = 5;
            check = 0;
            el.innerHTML = '';
            break
        case '3':
            deposit.bonus = 0
            deposit.days = 7
            // widgetstatic.innerText = '7% в месяц';
            procent = 7;
            check = 0;

            el.innerHTML = '<input type="checkbox"  id="checkbox1" name="capitalization" value="on" onchange = "showPresentORAbsent();" > <label for="checkbox1">Капитализация</label>';
            break
        case '6':
            deposit.days = 14
            deposit.bonus = 0
            // widgetstatic.innerText = '9% в месяц';
            procent = 9;
            check = 0;
            el.innerHTML = '<input type="checkbox"  id="checkbox1" name="capitalization" value="on" onchange = "showPresentORAbsent();" > <label for="checkbox1">Капитализация</label>';
            break
        /*
            case '4':
              deposit.days = 30
              deposit.bonus = 0.0152
              break
        */
        default:
            break
    }
    calcMoney(+input.value, false, procent);
    reload()
}


// ререндеринг
function reload() {
    if (depositWidget != null || depositWidget != undefined) {
        depositWidget.innerHTML = deposit.deposit
        profitWidget.innerHTML = deposit.profit.toFixed(2);
        finalWidget.innerHTML = deposit.money;
        if (deposit.bonus != 0) {
            // bonusWidgetWrap.classList.remove('widget__content-wrap-bt');
            // bonusWidget.innerHTML = (deposit.bonus * 100).toFixed(2) + '%'
            /* capitalWidget.innerHTML = 'Present'*/
        } else {
            // bonusWidgetWrap.classList.add('widget__content-wrap-bt');
            // bonusWidget.innerHTML = 'Отсутствует'
            /*  capitalWidget.innerHTML = 'Absent'*/

        }
    }
}

function bonus(value, procent) {
    let bonus = 0;
    if (value >= 20000) {
        bonus = 2;
    } else if (value >= 10000) {
        bonus = 1.5;
    } else if (value >=5000) {
        bonus = 1;
    } else if (value >=2000) {
        bonus = 0.5;
    }
    $('#bonus').text('+'+bonus + '%');
    return procent + bonus;
}
