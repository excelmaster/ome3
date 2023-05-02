<?php

namespace App\Models;

use CodeIgniter\Model;

class PdfModel extends Model
{
    protected $table      = 'ome_listapdf';
    protected $primaryKey = 'id';    

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'lessonId', 
        'activityNumber',
        'img_path',
        'objectId',
        'tipo',
        'url_resources',
        'lesson_id',
        'course_id',
        'categoria'
    ];
    
    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    function showPDFByCourse($course){
        return $this->like('categoria',$course,'after')->orderBy('course_id, lesson','asc')->findAll();
    }
}

