import React, {useState} from 'react'

export default function Task() {

    const [task, setTask] = useState({})

    return (
        <li className="list-group-item flex-column align-items-start">
            <div className="d-flex w-100 justify-content-between mb-2">
                <div className="d-flex">

                    {/* Task checkbox */}
                    <div className="custom-control custom-checkbox">
                        <input type="checkbox" className="custom-control-input"/>
                        <label className="custom-control-label"></label>
                    </div>

                    {/* Task text */}
                    <h5 className="pb-0 task-text">
                        {{ task }}
                    </h5>

                </div>
                <small>Updated 3 days ago</small>
            </div>

            {/* Task actions */}
            <div>
                <button type="button" className="btn btn-link text-primary btn-sm pl-0">Edit</button>
                <button type="button" className="btn btn-link text-danger btn-sm">Delete</button>
            </div>

        </li>
    )
}
