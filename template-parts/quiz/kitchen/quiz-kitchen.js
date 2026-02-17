// Ждем загрузки DOM
document.addEventListener('DOMContentLoaded', function () {

    // снять выбор радио кнопки
    var allRadioGroups = {};

    document.querySelectorAll('input[type="radio"]').forEach(function (input) {
        var groupName = input.getAttribute('name');

        if (input.type === 'radio') {
            if (!allRadioGroups[groupName]) {
                allRadioGroups[groupName] = null;
            }

            input.addEventListener('click', function (e) {
                if (this === allRadioGroups[groupName]) {
                    this.checked = false;
                    allRadioGroups[groupName] = null;
                } else {
                    allRadioGroups[groupName] = this;
                }
            });
        }
    });

    // ============================================
    // УНИВЕРСАЛЬНЫЕ КНОПКИ "НАЗАД"
    // ============================================
    document.querySelectorAll('.btn-back').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            var prevQuestion = this.getAttribute('data-prev');
            if (prevQuestion) {
                // Скрываем текущий вопрос
                var currentQuestion = this.closest('[id^="question-"]');
                if (currentQuestion) {
                    currentQuestion.style.display = 'none';
                }
                
                // Показываем предыдущий вопрос
                var prevElement = document.getElementById(prevQuestion);
                if (prevElement) {
                    prevElement.style.display = 'block';
                }
            }
        });
    });

    // ============================================
    // ВОПРОС 1 - Планировка кухни
    // ============================================
    var btnNext1Kitchen = document.getElementById('btn-next-question-1-kitchen');
    if (btnNext1Kitchen) {
        btnNext1Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-1-kitchen"]:checked')) {
                alert('Для продолжения выберите планировку кухни.');
                return false;
            }

            var answer = document.querySelector('input[name="question-1-kitchen"]:checked').value;
            document.getElementById('form-question-1-kitchen').value = answer;

            document.getElementById('question-1-kitchen').style.display = 'none';
            document.getElementById('question-2-kitchen').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 2 - Дополнительные особенности
    // ============================================
    var btnNext2Kitchen = document.getElementById('btn-next-question-2-kitchen');
    if (btnNext2Kitchen) {
        btnNext2Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            // Собираем выбранные ответы (можно не выбирать ни одного)
            for (var i = 1; i <= 3; i++) {
                var checkbox = document.getElementById('answer-2-kitchen-' + i);
                if (checkbox && checkbox.checked) {
                    document.getElementById('form-answer-2-kitchen-' + i).value = checkbox.value;
                }
            }

            document.getElementById('question-2-kitchen').style.display = 'none';
            document.getElementById('question-3-kitchen').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 3 - Размеры
    // ============================================
    var btnNext3Kitchen = document.getElementById('btn-next-question-3-kitchen');
    if (btnNext3Kitchen) {
        btnNext3Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            var kitchenSizeInput = document.getElementById('kitchen-size');
            if (!kitchenSizeInput || !kitchenSizeInput.value.trim()) {
                alert('Пожалуйста, укажите размеры кухни.');
                return false;
            }

            // Сохраняем размер кухни
            document.getElementById('form-kitchen-size').value = kitchenSizeInput.value;

            document.getElementById('question-3-kitchen').style.display = 'none';
            document.getElementById('question-4-kitchen').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 4 - Стиль
    // ============================================
    var btnNext4Kitchen = document.getElementById('btn-next-question-4-kitchen');
    if (btnNext4Kitchen) {
        btnNext4Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-4-kitchen"]:checked')) {
                alert('Для продолжения выберите стиль кухни.');
                return false;
            }

            var answer = document.querySelector('input[name="question-4-kitchen"]:checked').value;
            document.getElementById('form-question-4-kitchen').value = answer;

            document.getElementById('question-4-kitchen').style.display = 'none';
            document.getElementById('question-5-kitchen').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 5 - Материал фасада
    // ============================================
    var btnNext5Kitchen = document.getElementById('btn-next-question-5-kitchen');
    if (btnNext5Kitchen) {
        btnNext5Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-5-kitchen"]:checked')) {
                alert('Для продолжения выберите материал фасада.');
                return false;
            }

            var answer = document.querySelector('input[name="question-5-kitchen"]:checked').value;
            document.getElementById('form-question-5-kitchen').value = answer;

            document.getElementById('question-5-kitchen').style.display = 'none';
            document.getElementById('question-6-kitchen').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 6 - Бюджет
    // ============================================
    var btnNext6Kitchen = document.getElementById('btn-next-question-6-kitchen');
    if (btnNext6Kitchen) {
        btnNext6Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-6-kitchen"]:checked')) {
                alert('Для продолжения выберите планируемый бюджет.');
                return false;
            }

            var answer = document.querySelector('input[name="question-6-kitchen"]:checked').value;
            document.getElementById('form-question-6-kitchen').value = answer;

            document.getElementById('question-6-kitchen').style.display = 'none';
            document.getElementById('question-7-kitchen').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 7 - Подарок
    // ============================================
    var btnNext7Kitchen = document.getElementById('btn-next-question-7-kitchen');
    if (btnNext7Kitchen) {
        btnNext7Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-7-kitchen"]:checked')) {
                alert('Для продолжения выберите подарок.');
                return false;
            }

            var answer = document.querySelector('input[name="question-7-kitchen"]:checked').value;
            document.getElementById('form-question-7-kitchen').value = answer;

            document.getElementById('question-7-kitchen').style.display = 'none';
            document.getElementById('question-final').style.display = 'block';
        });
    }

    // ============================================
    // ФИНАЛЬНЫЙ ШАГ
    // ============================================

    // Обработчики для финальных чекбоксов (теперь 5 штук)
    for (var i = 1; i <= 5; i++) {
        var checkbox = document.getElementById('answer-final-' + i);
        var hiddenField = document.getElementById('form-answer-final-' + i);

        if (checkbox && hiddenField) {
            (function(cb, hf) {
                cb.addEventListener('change', function () {
                    hf.value = this.checked ? this.value : '';
                });

                if (cb.checked) {
                    hf.value = cb.value;
                }
            })(checkbox, hiddenField);
        }
    }
});