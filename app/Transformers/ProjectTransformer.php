<?php
/**
 * Created by PhpStorm.
 * User: Notebook
 * Date: 27/03/2017
 * Time: 09:34
 */

namespace App\Transformers;

use App\Entities\Project;
use League\Fractal\TransformerAbstract;

class ProjectTransformer extends TransformerAbstract
{
    public function transform(Project $project)
    {
        return [
            'project_id' => $project->id,
            'client_id' => $project->client_id,
            'owner_id' => $project->owner_id,
            'members' => $project->members,
            'project' => $project->name,
            'description' => $project->description,
            'progress' => $project->progress,
            'status' => $project->status,
            'due_date' => $project->due_date
        ];
    }
}