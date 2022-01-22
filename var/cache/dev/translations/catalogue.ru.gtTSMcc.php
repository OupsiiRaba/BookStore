<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ru', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Эта форма не должна содержать дополнительных полей.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Загруженный файл слишком большой. Пожалуйста, попробуйте загрузить файл меньшего размера.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF значение недопустимо. Пожалуйста, попробуйте повторить отправку формы.',
    'This value is not a valid HTML5 color.' => 'Значение не является допустимым HTML5 цветом.',
    'Please enter a valid birthdate.' => 'Пожалуйста, введите действительную дату рождения.',
    'The selected choice is invalid.' => 'Выбранный вариант недопустим.',
    'The collection is invalid.' => 'Коллекция недопустима.',
    'Please select a valid color.' => 'Пожалуйста, выберите допустимый цвет.',
    'Please select a valid country.' => 'Пожалуйста, выберите действительную страну.',
    'Please select a valid currency.' => 'Пожалуйста, выберите действительную валюту.',
    'Please choose a valid date interval.' => 'Пожалуйста, выберите действительный период.',
    'Please enter a valid date and time.' => 'Пожалуйста, введите действительные дату и время.',
    'Please enter a valid date.' => 'Пожалуйста, введите действительную дату.',
    'Please select a valid file.' => 'Пожалуйста, выберите допустимый файл.',
    'The hidden field is invalid.' => 'Значение скрытого поля недопустимо.',
    'Please enter an integer.' => 'Пожалуйста, введите целое число.',
    'Please select a valid language.' => 'Пожалуйста, выберите допустимый язык.',
    'Please select a valid locale.' => 'Пожалуйста, выберите допустимую локаль.',
    'Please enter a valid money amount.' => 'Пожалуйста, введите допустимое количество денег.',
    'Please enter a number.' => 'Пожалуйста, введите номер.',
    'The password is invalid.' => 'Пароль недействителен.',
    'Please enter a percentage value.' => 'Пожалуйста, введите процентное значение.',
    'The values do not match.' => 'Значения не совпадают.',
    'Please enter a valid time.' => 'Пожалуйста, введите действительное время.',
    'Please select a valid timezone.' => 'Пожалуйста, выберите действительный часовой пояс.',
    'Please enter a valid URL.' => 'Пожалуйста, введите действительный URL.',
    'Please enter a valid search term.' => 'Пожалуйста, введите действительный поисковый запрос.',
    'Please provide a valid phone number.' => 'Пожалуйста, введите действительный номер телефона.',
    'The checkbox has an invalid value.' => 'Флажок имеет недопустимое значение.',
    'Please enter a valid email address.' => 'Пожалуйста, введите допустимый email адрес.',
    'Please select a valid option.' => 'Пожалуйста, выберите допустимый вариант.',
    'Please select a valid range.' => 'Пожалуйста, выберите допустимый диапазон.',
    'Please enter a valid week.' => 'Пожалуйста, введите действительную неделю.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ошибка аутентификации.',
    'Authentication credentials could not be found.' => 'Аутентификационные данные не найдены.',
    'Authentication request could not be processed due to a system problem.' => 'Запрос аутентификации не может быть обработан в связи с проблемой в системе.',
    'Invalid credentials.' => 'Недействительные аутентификационные данные.',
    'Cookie has already been used by someone else.' => 'Cookie уже был использован кем-то другим.',
    'Not privileged to request the resource.' => 'Отсутствуют права на запрос этого ресурса.',
    'Invalid CSRF token.' => 'Недействительный токен CSRF.',
    'No authentication provider found to support the authentication token.' => 'Не найден провайдер аутентификации, поддерживающий токен аутентификации.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сессия не найдена, ее время истекло, либо cookies не включены.',
    'No token could be found.' => 'Токен не найден.',
    'Username could not be found.' => 'Имя пользователя не найдено.',
    'Account has expired.' => 'Время действия учетной записи истекло.',
    'Credentials have expired.' => 'Время действия аутентификационных данных истекло.',
    'Account is disabled.' => 'Учетная запись отключена.',
    'Account is locked.' => 'Учетная запись заблокирована.',
    'Too many failed login attempts, please try again later.' => 'Слишком много неудачных попыток входа, пожалуйста, попробуйте позже.',
    'Invalid or expired login link.' => 'Ссылка для входа недействительна или просрочена.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Слишком много неудачных попыток входа в систему, повторите попытку через %minutes% минуту.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Слишком много неудачных попыток входа в систему, повторите попытку через %minutes% мин.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Назад',
    'label_next' => 'Вперед',
    'filter_searchword' => 'Поиск...',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Дашборд',
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => '%entity_label_singular%',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Создать новый %entity_label_singular%',
    'page_title.exception' => 'Ошибка|Ошибки|Ошибок',
    'datagrid.hidden_results' => 'Некоторые результаты не могут быть отображены, потому что вы не имеете достаточных привелегий',
    'datagrid.no_results' => 'Ничего не найдено.',
    'paginator.first' => 'Первая',
    'paginator.previous' => 'Предыдущая',
    'paginator.next' => 'Следующая',
    'paginator.last' => 'Последняя',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> из <strong>%results%</strong>',
    'paginator.results' => '<strong>%count%</strong> результат|<strong>%count%</strong> результата|<strong>%count%</strong> результатов',
    'label.true' => 'Да',
    'label.false' => 'Нет',
    'label.empty' => 'Пусто',
    'label.null' => 'Null',
    'label.nullable_field' => 'Оставить пустым',
    'label.object' => 'PHP-объект',
    'label.inaccessible' => 'Недоступно',
    'label.inaccessible.explanation' => 'Нет геттера для этого поля или свойство не общедоступно',
    'label.form.empty_value' => 'Пусто',
    'field.code_editor.view_code' => 'Просмотреть код',
    'field.text_editor.view_content' => 'Просмотреть содержимое',
    'action.entity_actions' => 'Действия',
    'action.new' => 'Создать %entity_label_singular%',
    'action.search' => 'Поиск',
    'action.detail' => 'Показать',
    'action.edit' => 'Редактировать',
    'action.delete' => 'Удалить',
    'action.cancel' => 'Отклонить',
    'action.index' => 'Вернуться к списку',
    'action.deselect' => 'Снять выбор',
    'action.add_new_item' => 'Добавить новый элемент',
    'action.remove_item' => 'Удалить элемент',
    'action.choose_file' => 'Выберите файл',
    'action.close' => 'Закрыть',
    'action.create' => 'Создать',
    'action.create_and_add_another' => 'Создать и добавить еще',
    'action.create_and_continue' => 'Создать и продолжить',
    'action.save' => 'Сохранить',
    'action.save_and_continue' => 'Сохранить и продолжить',
    'batch_action_modal.title' => 'Вы собираетесь выполнить действие "%action_name%" для выбранных строк (%num_items%)',
    'batch_action_modal.content' => 'Эту операцию нельзя отменить.',
    'batch_action_modal.action' => 'Продолжить',
    'delete_modal.title' => 'Вы действительно хотите удалить этот объект?',
    'delete_modal.content' => 'Эту операцию нельзя отменить.',
    'filter.title' => 'Фильтры',
    'filter.button.clear' => 'Очистить',
    'filter.button.apply' => 'Применить',
    'filter.label.is_equal_to' => 'равно',
    'filter.label.is_not_equal_to' => 'не равно',
    'filter.label.is_greater_than' => 'больше чем',
    'filter.label.is_greater_than_or_equal_to' => 'больше или равно',
    'filter.label.is_less_than' => 'меньше чем',
    'filter.label.is_less_than_or_equal_to' => 'меньше или равно',
    'filter.label.is_between' => 'между',
    'filter.label.contains' => 'содержит',
    'filter.label.not_contains' => 'не содержит',
    'filter.label.starts_with' => 'начинается с',
    'filter.label.ends_with' => 'заканчивается на',
    'filter.label.exactly' => 'точно',
    'filter.label.not_exactly' => 'не точно',
    'filter.label.is_same' => 'такой же',
    'filter.label.is_not_same' => 'не такой же',
    'filter.label.is_after' => 'после',
    'filter.label.is_after_or_same' => 'после или соответствует',
    'filter.label.is_before' => 'до',
    'filter.label.is_before_or_same' => 'до или соответствует',
    'form.are_you_sure' => 'Вы не сохранили сделанные изменения.',
    'form.tab.error_badge_title' => 'Один неверный ввод|%count% неверных ввода|%count% неверных вводов',
    'form.slug.confirm_text' => 'Если вы измените текстовый идентификатор, вы можете сломать ссылки на других страницах.',
    'user.logged_in_as' => 'Вы вошли как',
    'user.unnamed' => 'Безымянный пользователь',
    'user.anonymous' => 'Анонимный пользователь',
    'user.sign_out' => 'Выход',
    'user.exit_impersonation' => 'Выйти из-под пользователя',
    'login_page.username' => 'Логин',
    'login_page.password' => 'Пароль',
    'login_page.sign_in' => 'Войти',
    'login_page.forgot_password' => 'Забыли пароль?',
    'login_page.remember_me' => 'Запомнить меня',
    'exception.entity_not_found' => 'Элемент больше не доступен.',
    'exception.entity_remove' => 'Элемент не может быть удалён, потому что другой элемент зависит от него.',
    'exception.forbidden_action' => 'Запрашиваемое действие запрещено для этого элемента.',
    'exception.insufficient_entity_permission' => 'У вас недостаточно прав для доступа к этому элементу.',
    'autocomplete.no-results-found' => 'Совпадений не найдено',
    'autocomplete.loading-more-results' => 'Загрузка данных…',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
    'filter_searchword' => 'Searchword...',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Dashboard',
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => 'Edit %entity_label_singular%',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Create %entity_label_singular%',
    'page_title.exception' => 'Error|Errors',
    'datagrid.hidden_results' => 'Some results can\'t be displayed because you don\'t have enough permissions',
    'datagrid.no_results' => 'No results found.',
    'paginator.first' => 'First',
    'paginator.previous' => 'Previous',
    'paginator.next' => 'Next',
    'paginator.last' => 'Last',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> of <strong>%results%</strong>',
    'paginator.results' => '{0} No results|{1} <strong>1</strong> result|]1,Inf] <strong>%count%</strong> results',
    'label.true' => 'Yes',
    'label.false' => 'No',
    'label.empty' => 'Empty',
    'label.null' => 'Null',
    'label.nullable_field' => 'Leave empty',
    'label.object' => 'PHP Object',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Getter method does not exist for this field or the field is not public',
    'label.form.empty_value' => 'None',
    'field.code_editor.view_code' => 'View code',
    'field.text_editor.view_content' => 'View content',
    'action.entity_actions' => 'Actions',
    'action.new' => 'Add %entity_label_singular%',
    'action.search' => 'Search',
    'action.detail' => 'Show',
    'action.edit' => 'Edit',
    'action.delete' => 'Delete',
    'action.cancel' => 'Cancel',
    'action.index' => 'Back to listing',
    'action.deselect' => 'Deselect',
    'action.add_new_item' => 'Add a new item',
    'action.remove_item' => 'Remove the item',
    'action.choose_file' => 'Choose file',
    'action.close' => 'Close',
    'action.create' => 'Create',
    'action.create_and_add_another' => 'Create and add another',
    'action.create_and_continue' => 'Create and continue editing',
    'action.save' => 'Save changes',
    'action.save_and_continue' => 'Save and continue editing',
    'batch_action_modal.title' => 'You are going to apply the "%action_name%" action to %num_items% item(s).',
    'batch_action_modal.content' => 'There is no undo for this operation.',
    'batch_action_modal.action' => 'Proceed',
    'delete_modal.title' => 'Do you really want to delete this item?',
    'delete_modal.content' => 'There is no undo for this operation.',
    'filter.title' => 'Filters',
    'filter.button.clear' => 'Clear',
    'filter.button.apply' => 'Apply',
    'filter.label.is_equal_to' => 'is equal to',
    'filter.label.is_not_equal_to' => 'is not equal to',
    'filter.label.is_greater_than' => 'is greater than',
    'filter.label.is_greater_than_or_equal_to' => 'is greater than or equal to',
    'filter.label.is_less_than' => 'is less than',
    'filter.label.is_less_than_or_equal_to' => 'is less than or equal to',
    'filter.label.is_between' => 'is between',
    'filter.label.contains' => 'contains',
    'filter.label.not_contains' => 'doesn\'t contain',
    'filter.label.starts_with' => 'starts with',
    'filter.label.ends_with' => 'ends with',
    'filter.label.exactly' => 'exactly',
    'filter.label.not_exactly' => 'not exactly',
    'filter.label.is_same' => 'is same',
    'filter.label.is_not_same' => 'is not same',
    'filter.label.is_after' => 'is after',
    'filter.label.is_after_or_same' => 'is after or same',
    'filter.label.is_before' => 'is before',
    'filter.label.is_before_or_same' => 'is before or same',
    'form.are_you_sure' => 'You haven\'t saved the changes made on this form.',
    'form.tab.error_badge_title' => 'One invalid input|%count% invalid inputs',
    'form.slug.confirm_text' => 'If you change the slug, you can break links on other pages.',
    'user.logged_in_as' => 'Logged in as',
    'user.unnamed' => 'Unnamed User',
    'user.anonymous' => 'Anonymous User',
    'user.sign_out' => 'Sign out',
    'user.exit_impersonation' => 'Exit impersonation',
    'login_page.username' => 'Username',
    'login_page.password' => 'Password',
    'login_page.sign_in' => 'Sign in',
    'login_page.forgot_password' => 'Forgot Your Password?',
    'login_page.remember_me' => 'Remember me',
    'exception.entity_not_found' => 'This item is no longer available.',
    'exception.entity_remove' => 'This item can\'t be deleted because other items depend on it.',
    'exception.forbidden_action' => 'The requested action can\'t be performed on this item.',
    'exception.insufficient_entity_permission' => 'You don\'t have permission to access this item.',
    'autocomplete.no-results-found' => 'No results found',
    'autocomplete.no-more-results' => 'No more results',
    'autocomplete.loading-more-results' => 'Loading more results…',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
