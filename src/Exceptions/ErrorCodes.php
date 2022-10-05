<?php

namespace karwan\restapi-laravel\Exceptions;

class ErrorCodes
{
    const REQUEST_PARSE_EXCEPTION = 100;
    const UNKNOWN_EXCEPTION  = 1;
    const UNAUTHENTICATION_EXCEPTION = 401;
    const UNAUTHORIZED_EXCEPTION = 403;
    const VALIDATION_EXCEPTION = 422;
    const RESOURCE_NOT_FOUND_EXCEPTION = 404;

    const INNER_FILTER_NOT_FOUND = 1001;
    const INNER_INVALID_FILTER_DEFINITION = 1002;
    const INNER_UNKNOWN_FILED_EXCEPTION = 1003;
    const INNER_NOT_ALLOWED_TO_FILTER_ON_THIS_FIELD = 1004;
    const INNER_ORDERING_INVALID = 1005;
    const INNER_MAX_LIMIT = 1006;
    const INNER_INVALID_LIMIT = 1007;

    const INNER_RELATED_RESOURCE_NOT_EXISTS = 1010;
}