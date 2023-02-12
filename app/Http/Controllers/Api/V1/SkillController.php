<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;

class SkillController extends Controller
{
    public function index()
    {
        return response()->json('Skill Index');
    }

    public function store(StoreSkillRequest $request)
    {
        Skill::create($request->validated());
        
        return response()->json('Skill Created!');
    }

    public function update(StoreSkillRequest $request, Skill $skill)
    {
        // $data = $request->all();

        // $skill = Skill::create($data);

        $skill->update($request->validated());

        return response()->json('Skill Updated!');

    }
}
