<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('he', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'הטופס לא צריך להכיל שדות נוספים.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'הקובץ שהועלה גדול מדי. נסה להעלות קובץ קטן יותר.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'אסימון CSRF אינו חוקי. אנא נסה לשלוח שוב את הטופס.',
    'This value is not a valid HTML5 color.' => 'ערך זה אינו צבע HTML5 חוקי.',
    'Please enter a valid birthdate.' => 'נא להזין את תאריך לידה תקני.',
    'The selected choice is invalid.' => 'הבחירה שנבחרה אינה חוקית.',
    'The collection is invalid.' => 'האוסף אינו חוקי.',
    'Please select a valid color.' => 'אנא בחר צבע חוקי.',
    'Please select a valid country.' => 'אנא בחר מדינה חוקית.',
    'Please select a valid currency.' => 'אנא בחר מטבע חוקי.',
    'Please choose a valid date interval.' => 'אנא בחר מרווח תאריכים חוקי.',
    'Please enter a valid date and time.' => 'אנא הזן תאריך ושעה תקנים.',
    'Please enter a valid date.' => 'נא להזין תאריך חוקי.',
    'Please select a valid file.' => 'אנא בחר קובץ חוקי.',
    'The hidden field is invalid.' => 'השדה הנסתר אינו חוקי.',
    'Please enter an integer.' => 'אנא הזן מספר שלם.',
    'Please select a valid language.' => 'אנא בחר שפה חוקי.',
    'Please select a valid locale.' => 'אנא בחר שפה מקומית.',
    'Please enter a valid money amount.' => 'אנא הזן סכום כסף חוקי.',
    'Please enter a number.' => 'אנא הזן מספר.',
    'The password is invalid.' => 'הסיסמה אינה חוקית.',
    'Please enter a percentage value.' => 'אנא הזן ערך באחוזים.',
    'The values do not match.' => 'הערכים אינם תואמים.',
    'Please enter a valid time.' => 'אנא הזן שעה חוקי.',
    'Please select a valid timezone.' => 'אנא בחר אזור זמן חוקי.',
    'Please enter a valid URL.' => 'נא להזין את כתובת אתר חוקית.',
    'Please enter a valid search term.' => 'אנא הזן מונח חיפוש חוקי.',
    'Please provide a valid phone number.' => 'אנא ספק מספר טלפון חוקי.',
    'The checkbox has an invalid value.' => 'לתיבת הסימון יש ערך לא חוקי.',
    'Please enter a valid email address.' => 'אנא הזן כתובת דוא"ל תקנית.',
    'Please select a valid option.' => 'אנא בחר אפשרות חוקית.',
    'Please select a valid range.' => 'אנא בחר טווח חוקי.',
    'Please enter a valid week.' => 'אנא הזן שבוע תקף.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'שגיאה באימות',
    'Authentication credentials could not be found.' => 'פרטי זיהוי לא נמצאו.',
    'Authentication request could not be processed due to a system problem.' => 'לא ניתן היה לעבד את בקשת אימות בגלל בעיית מערכת.',
    'Invalid credentials.' => 'שם משתמש או סיסמא שגויים.',
    'Cookie has already been used by someone else.' => 'עוגיה כבר שומשה.',
    'Not privileged to request the resource.' => 'אין הרשאה מתאימה.',
    'Invalid CSRF token.' => 'אסימון CSRF לא חוקי.',
    'No authentication provider found to support the authentication token.' => 'לא נמצא ספק אימות המתאימה לבקשה.',
    'No session available, it either timed out or cookies are not enabled.' => 'אין סיישן זמין, או שתם הזמן הקצוב או העוגיות אינן מופעלות.',
    'No token could be found.' => 'הטוקן לא נמצא.',
    'Username could not be found.' => 'שם משתמש לא נמצא.',
    'Account has expired.' => 'החשבון פג תוקף.',
    'Credentials have expired.' => 'פרטי התחברות פקעו תוקף.',
    'Account is disabled.' => 'החשבון מבוטל.',
    'Account is locked.' => 'החשבון נעול.',
    'Too many failed login attempts, please try again later.' => 'יותר מדי ניסיונות כניסה כושלים, אנא נסה שוב מאוחר יותר.',
    'Invalid or expired login link.' => 'קישור כניסה לא חוקי או שפג תוקפו.',
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