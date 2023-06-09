<?php

namespace App\Http\Resources;

use App\Http\Resources\RoleResource;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PurchaseRequestApprovalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"                    => $this->id,
            "purchase_request_id"   => $this->purchase_request_id,
            "order"                 => $this->order,
            "role"                  => new RoleResource($this->role),
            "approve_user"          => $this->approve_user_id ? new UserResource($this->user) : null,
            "approved_at"           => $this->approved_at,
            "created_at"            => $this->created_at,
            "updated_at"            => $this->updated_at
        ];
    }
}
