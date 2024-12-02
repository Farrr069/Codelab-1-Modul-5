<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    // Definisikan properti untuk status, message, dan resource
    public $status;
    public $message;
    public $resource;

    /**
     * Konstruktor untuk menginisialisasi status, message, dan resource.
     *
     * @param  mixed $status
     * @param  mixed $message
     * @param  mixed $resource
     * @return void
     */
    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status  = $status;
        $this->message = $message;
    }

    /**
     * Transformasi resource ke dalam array.
     *
     * @param  mixed $request
     * @return array
     */
    public function toArray(Request $request): array
    {
        return [
            'success' => $this->status,  // Menampilkan status
            'message' => $this->message, // Menampilkan pesan
            'data'    => $this->resource, // Menampilkan data resource
        ];
    }
}
