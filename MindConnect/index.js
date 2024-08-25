$(document).ready(function () {

        checkFields()

        let table = $('#myTable').DataTable({
            ajax: {
                url: 'result.php',
                type: 'GET',
                dataSrc: 'data'
            },
            columns: [
                {"data": "id", "title": "ID"},
                {"data": "name", "title": "Name"},
                {"data": "userInput", "title": "User Input"},
                {"data": "userFibonacci", "title": "User Fibonacci"},
                {"data": "user_IP", "title": "User IP"}]
        });

        $('.btn ').on('click', checkFields)

        $("#searchForm").on("submit", function (event) {
                event.preventDefault()
                isEmptyFieldsSubmit()
                if ($('#userName').val() && $('#userNumber').val()) {
                    $.post('result.php', {
                        userName: $('#userName').val(),
                        userNumber: $('#userNumber').val(),
                    })
                        .done(function (data) {
                            table.ajax.reload()
                            $('#userName').val('')
                            $('#userNumber').val('')
                        })
                        .fail(function () {
                            console.error('Post Error')
                        })
                } else {
                }
            }
        )

        function checkFields() {
            $('.form-floating').each(function () {
                let inputItem = $(this).find('input')[0]
                $(this).find('input').on('keyup', function () {
                    if ($(this)[0].id === 'userNumber') {
                        $(this).val($(this).val().replace(/\D/g, ''))
                    }
                    checkEmptyFields(inputItem)
                })
            })
        }

        function isEmptyFieldsSubmit() {
            $('.form-floating').find('input').each(function () {
                checkEmptyFields(this)
            })
        }

        function checkEmptyFields(item) {
            if (!$(item).val()) {
                $(item).addClass('is-invalid')
                if (item.id == 'userNumber') {
                    $(item).next().next().text('Please,enter a number')
                } else {
                    $(item).next().next().text('Please,fill in this field')
                }
            } else {
                $(item).next().next().text('')
                $(item).removeClass('is-invalid')
            }
        }

        function fibonacci(userNum) {
            if (userNum <= 0) return 0
            if (userNum === 1) return 1
            let a = 0, b = 1, c
            for (let i = 2; i <= userNum; i++) {
                c = a + b
                a = b
                b = c
            }
            return b
        }
    }
)

