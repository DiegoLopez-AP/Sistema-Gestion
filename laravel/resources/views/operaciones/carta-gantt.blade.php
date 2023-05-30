@extends('layouts.user_type.auth')

@section('content')

<div class="container">
    <h5>Operaciones/Carta Gantt</h5>
</div>
    <div class="container">
        <div class="kanban-heading">
            <strong class="kanban-heading-text">Kanban Board</strong>
        </div>
        <div class="kanban-board">
            <div class="kanban-block" id="todo" ondrop="drop(event)" ondragover="allowDrop(event)">
                <strong>To Do</strong>
                <div class="task-button-block">
                    <button id="task-button" onclick="createTask()">Create new task</span>
                </div>
                <div class="task" id="task1" draggable="true" ondragstart="drag(event)">
                    <a href="">Tarea 1 <span class="float-end pe-2"><i class="fas fa-pen"></i></span></a>
                </div>
                <div class="task" id="task2" draggable="true" ondragstart="drag(event)">
                    <span>Task 2</span>
                </div>
                
            </div>
            <div class="kanban-block" id="inprogress" ondrop="drop(event)" ondragover="allowDrop(event)">
                <strong>In Progress</strong>
            </div>
            <div class="kanban-block" id="done" ondrop="drop(event)" ondragover="allowDrop(event)">
                <strong>Done</strong>
            </div>
            <div class="create-new-task-block" id="create-new-task-block">
                <strong>New Task</strong>
                <span class="form-row">
                    <label class="form-row-label" for="task-name">Task</label>
                    <input class="form-row-input" type="text" name="task-name" id="task-name">
                </span>
                <span class="form-row">
                    <label class="form-row-label" for="task-name">Description</label>
                    <textarea class="form-row-input" name="task-description" id="task-description" cols="70" rows="10"></textarea>
                </span>
                <span class="form-row">
                    <label class="form-row-label" for="task-name">Status</label>
                    <select class="form-row-input" name="task-status" id="task-status">
                        <option value="todo">To Do</option>
                        <option value="inprogress">In Progress</option>
                        <option value="done">Done</option>
                    </select>
                </span>
                <span class="form-row-buttons">
                    <button id="edit-button" onclick="editTask()">Edit</span>
                    <button id="save-button" onclick="saveTask()">Save</span>
                    <button id="cancel-button" onclick="createTask()">Cancel</span>
                </span>
            </div>
        </div>
    </div>
    <script>
        function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function allowDrop(ev) {
  ev.preventDefault();
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.currentTarget.appendChild(document.getElementById(data));
}

function createTask(){
  var x = document.getElementById("inprogress");
  var y = document.getElementById("done");
  var z = document.getElementById("create-new-task-block");
  if (x.style.display === "none") {
      x.style.display = "block";
      y.style.display = "block";
      z.style.display = "none";
  } else {
      x.style.display = "none";
      y.style.display = "none";
      z.style.display = "flex";
  }
}

function saveTask(){
  // var saveButton = document.getElementById("save-button");
  // var editButton = document.getElementById("edit-button");
  // if (saveButton.style.display === "none") {
  //     saveButton.style.display = "block";
  //     editButton.style.display = "none";
  // } else{
  //     saveButton.style.display = "none";
  //     editButton.style.display = "block";
  // }

  var todo = document.getElementById("todo");
  var taskName = document.getElementById("task-name").value;
  todo.innerHTML += `
  <div class="task" id="${taskName.toLowerCase().split(" ").join("")}" draggable="true" ondragstart="drag(event)">
      <span>${taskName}</span>
  </div>
  `
}

function editTask(){
  var saveButton = document.getElementById("save-button");
  var editButton = document.getElementById("edit-button");
  if (saveButton.style.display === "none") {
      saveButton.style.display = "block";
      editButton.style.display = "none";
  } else{
      saveButton.style.display = "none";
      editButton.style.display = "block";
  }
}

    </script>

@endsection
