{foreach $SUCCESS_MESSAGES as $success}
    <div class="alert alert-success" role="alert">{$success}</div>
{/foreach}
{foreach $ERROR_MESSAGES as $error}
    <div class="alert alert-danger" role="alert">{$error}</div>
{/foreach}
