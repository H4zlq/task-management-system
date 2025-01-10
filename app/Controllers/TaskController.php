<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();
        $tasks = $taskModel->getTasks();

        $data = [
            'tasks' => $tasks,
        ];

        return view('layout/header', [
            'route' => 'dashboard',
        ])
            . view('dashboard', $data)
            . view('layout/footer');
    }

    public function add()
    {
        return view('layout/header', [
            'route' => 'new_task',
        ])
            . view('new_task')
            . view('layout/footer');
    }

    public function edit($id)
    {
        $taskModel = new TaskModel();
        $task = $taskModel->getTask($id);

        $data = [
            'id' => $task->id,
            'title' => $task->title,
            'description' => $task->description,
            'status' => $task->status,
            'due_date' => $task->due_date,
        ];

        return view('layout/header', [
            'route' => 'edit_task',
        ])
            . view('edit_task', $data)
            . view('layout/footer');
    }

    public function handle_add_task()
    {
        $taskModel = new TaskModel();

        $data = [
            'user_id' => session()->get('user')->username,
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'due_date' => $this->request->getPost('due_date'),
        ];

        $savedTask = $taskModel->save($data);

        if (!$savedTask) {
            return redirect()->back()
                ->with('errors', $taskModel->errors())
                ->withInput();
        }

        return redirect()->to('/dashboard');
    }

    public function handle_edit_task($id)
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status'),
            'due_date' => $this->request->getPost('due_date'),
        ];

        $updatedTask = $taskModel->update($id, $data);

        if (!$updatedTask) {
            return redirect()->back()
                ->with('errors', $taskModel->errors())
                ->withInput();
        }

        return redirect()->to('/dashboard');
    }

    public function handle_delete_task($id)
    {
        $taskModel = new TaskModel();
        $taskModel->delete($id);

        return redirect()->to('/dashboard');
    }
}
