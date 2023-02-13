<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Resources\V1\SkillCollection;
use App\Http\Resources\V1\SkillResource;

class SkillController extends Controller
{
    public function index()
    {
        return new SkillCollection(Skill::all());
    }

    public function show(Skill $skill)
    {
        return new SkillResource($skill);
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

    public function destroy(Skill $skill)
    {
        $skill->delete();

        return response()->json('Skill Deleted!');
    }
}
