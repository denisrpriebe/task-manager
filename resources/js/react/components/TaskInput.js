import React from 'react'

export default function TaskInput() {
    return (
        <div className="d-flex">
            <div className="flex-grow-1">
                <input type="text" className="form-control" placeholder="Add a task to the list..."/>
            </div>
            <button className="btn btn-primary ml-2">Add task</button>
        </div>
    )
}
