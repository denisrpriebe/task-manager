import React from 'react'
import ReactDom from 'react-dom'
import TaskInput from './TaskInput'
import TaskList from './TaskList'

function TaskManager() {
    return (
        <div className="col-md-8">

            {/* Task input */}
            <TaskInput/>

            {/* Task list */}
            <TaskList/>

        </div>
    )
}

ReactDom.render(<TaskManager/>, document.getElementById('task-manager'))
