<?php

namespace App\Src\Application\Exceptions;

use Illuminate\Support\Facades\DB;
use Exception;
use Throwable;

class ExceptionHandler
{
    public static function handle(callable $callback, string $errorMessage = 'Operation failed')
    {
        try {
            return $callback();
        } catch (Throwable $e) {
            return $errorMessage . ': ' . $e->getMessage();
        }
    }

    public static function handleTransaction(callable $callback, string $errorMessage = 'Transaction failed')
    {
        return self::handle(function () use ($callback, $errorMessage) {
            DB::beginTransaction();
            try {
                $result = $callback();
                DB::commit();
                return $result;
            } catch (Throwable $e) {
                DB::rollBack();
                throw $e;
            }
        }, $errorMessage);
    }

    public static function handleRepository(callable $callback, string $errorMessage = 'Repository error')
    {
        try {
            return $callback();
        } catch (Throwable $e) {
            throw new Exception($errorMessage . ': ' . $e->getMessage());
        }
    }
}