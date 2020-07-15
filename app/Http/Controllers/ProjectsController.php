<?php

namespace App\Http\Controllers;

use App\Project;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            //
            if (Auth::check()) {
            $projects=Project::where('user_id',Auth::user()->id)->orderBy('created_at','des')->get();
            return view('projects.index',['projects'=> $projects]);
            }
            return view('auth.login');
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($company_id=null)
        {
            if ($company_id!=null) {
                $company=Company::find($company_id);
                // var_dump ($company);
                // die();
                
                return view('projects.create',['company'=>$company]);    
            }
            else{
                $userDetails=Auth::user();
                // var_dump ($userDetails);
                // die();
                return view('projects.create',['userDetails'=>$userDetails]);
            }
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        if (Auth::check()) {

            $project=Project::create([
                'name'=>$request->input('name'),
                'description'=> $request->input('description'),
                'company_id'=> $request->input('company_id'),
                'user_id'=>Auth::user()->id
                ]);
          
            if ($project) {
                return redirect()->route('companies.show',['company'=>$request->input('company_id')])->with('success','New Project is added Successfully');
            
            }
        }
       
            return back()->withInput()->with('errors','Login to your Account or Signup');
        }
 

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        // print_r($company);
        // var_dump($company);
        // $companyOne=Company::where('id',$company->id)->first();
        $project=Project::find($project->id);
        // var_dump($project);
       
        // echo "<pre>";
        // print_r ($project);
        // echo "</pre>";
       
        // exit();
        
        return view('projects.show',['project'=>$project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        $project=Project::find($project->id);
        //  echo '<pre>';
        // print_r($project);
        // exit();

        return view('projects.edit',['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $projectUpdate=Project::where('id', $project->id)
        ->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description')
        ]);
        if ($projectUpdate) {
            return redirect()->route('projects.show',['project'=>$project->id])
            ->with('success', 'Project Updated Successfully');
        }
        else{
        return back()->withInput('errors');
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $findProject=Project::find($project->id);
        if ($findProject->delete()) {
            return redirect()->route('projects.index')
            ->with('success', 'Project Deleted Successfully');
        }
        else{
        return back()->withInput()->with('errors','Project Could not be deleted');
            
        }
    }
}
