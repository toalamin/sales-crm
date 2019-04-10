<?php

function setSuccessMessage($message)
{
    session()->flash('type', 'success');
    session()->flash('message', $message);
}

function setErrorMessage($message)
{
    session()->flash('type', 'danger');
    session()->flash('message', $message);
}
