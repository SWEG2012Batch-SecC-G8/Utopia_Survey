var select = document.getElementById("report_about");
// alert("is this working");
var childs = {
    survey: [{
            label: 'All created surveys',
            value: 1
        },
        {
            label: 'answerd surveys',
            value: 2
        },
        {
            label: 'business surveys',
            value: 3
        }
    ],
    customer: [{
            label: 'All verified customers',
            value: 1
        },
        {
            label: 'unemployeed customers',
            value: 2
        },
        {
            label: 'employeed customers',
            value: 3
        }, {
            label: 'Customers who answered more than 10 surveys',
            value: 4
        },
        {
            label: 'customers who created survey',
            value: 5
        }
    ],

    payment: [{
            label: 'who make payment today',
            value: 1
        },
        {
            label: 'last hour all transactions',
            value: 2
        },
    ]
}




function handleChange() {
    var x = document.getElementById("report_about").value;

    var childOptions = childs[x]
    var childSelect = document.getElementById('type_select')
    childSelect.innerHTML = ''

    childOptions.forEach(function(option) {
        var optionEle = document.createElement('option')
        optionEle.value = option.value
        optionEle.label = option.label

        childSelect.appendChild(optionEle)
    })

}
handleChange();

var childs2 = {
    add_data: [{
            label: 'customer',
            value: 1
        },
        {
            label: 'survey',
            value: 2
        },
        {
            label: 'answer',
            value: 3
        }
    ],
    delete_data: [{
            label: 'customer',
            value: 1
        },
        {
            label: 'survey',
            value: 2
        },
        {
            label: 'answer',
            value: 3
        }
    ]
}

console.log(document.getElementById("modify").value);

function handleChange2() {
    var x = document.getElementById("modify").value;
    var childOptions = childs2[x];
    var childSelect = document.getElementById('modify_what');
    childSelect.innerHTML = '';
    childOptions.forEach(function(option) {
        if (childOptions.value == "delete_data") {
            document.getElementById("delete_name").style.display = "block";
        }
        var optionEle = document.createElement('option');
        optionEle.value = option.value;
        optionEle.label = option.label;
        childSelect.appendChild(optionEle);
    })
    if (document.getElementById("modify").value == "delete_data") {
        document.getElementById("delete_name").style.display = "block";
        document.getElementById("file_input").style.display = "none";
    } else if (document.getElementById("modify").value == "add_data") {
        document.getElementById("delete_name").style.display = "none";
        document.getElementById("file_input").style.display = "block";
    }
}
handleChange2();