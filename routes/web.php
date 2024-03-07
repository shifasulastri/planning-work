<?php

use App\Http\Controllers\BebanBarangController;
use App\Http\Controllers\BebanSubkonController;
use App\Http\Controllers\ClosingController;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\ControlMonitoringController;
use App\Http\Controllers\ExecutingController;
use App\Http\Controllers\InitiatingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\projectAnouncementController;
use App\Http\Controllers\ProjectCharterController;
use App\Http\Controllers\ProjectDefinitionController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\reviewMeetingController;
use App\Http\Controllers\RiskController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ScopeController;
use App\Http\Controllers\StakeholderController;
use App\Http\Controllers\teamMoraleController;
use App\Http\Controllers\TermPlanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/PostLogin', [LoginController::class, 'login']);

Route::get('/user',[UserController::class, 'index']);
Route::get('/user/add',[UserController::class, 'create']);
Route::post('/user/save',[UserController::class, 'store']);
Route::get('/user/{id}/delete',[UserController::class, 'destroy']);
Route::get('/user/{id}/edit',[UserController::class, 'show']);
Route::post('/user/{id}/update',[UserController::class, 'update']);

Route::get('/smbptn', function () {
    return view('pdss');
});

Route::group(['middleware'=>['auth']], function(){


    Route::get('/initiating',[InitiatingController::class, 'index']);

    Route::get('/projectDefinition',[ProjectDefinitionController::class, 'index']);
    Route::get('/projectDefinition/add',[ProjectDefinitionController::class, 'create']);
    Route::post('/projectDefinition/save',[ProjectDefinitionController::class, 'store']);
    Route::post('/projectDefinition/{id}/update',[ProjectDefinitionController::class, 'update']);
    Route::get('/projectDefinition/{id}/delete',[ProjectDefinitionController::class, 'destroy']);
    Route::get('/projectDefinition/{id}/edit',[ProjectDefinitionController::class, 'show']);
    
    Route::get('/projectCharter',[ProjectCharterController::class, 'index']);
    

    Route::get('/planning',[PlanningController::class, 'index']);
    //risk
    Route::get('/risk',[RiskController::class, 'index']);
    Route::get('/risk/add',[RiskController::class, 'create']);
    Route::post('/risk/save',[RiskController::class, 'store']);
    Route::get('/risk/{id}/delete',[RiskController::class, 'destroy']);
    Route::get('/risk/{id}/edit',[RiskController::class, 'show']);
    Route::post('/risk/{id}/update',[RiskController::class, 'update']);
    //scope
    Route::get('/scope',[ScopeController::class, 'index']);
    Route::get('/scope/add',[ScopeController::class, 'create']);
    Route::post('/scope/save',[ScopeController::class, 'store']);
    Route::get('/scope/{id}/delete',[ScopeController::class, 'destroy']);
    Route::get('/scope/{id}/edit',[ScopeController::class, 'show']);
    Route::post('/scope/{id}/update',[ScopeController::class, 'update']);
    //resources
    Route::get('/resources',[ResourcesController::class, 'index']);
    Route::get('/resources/add',[ResourcesController::class, 'create']);
    Route::post('/resources/save',[ResourcesController::class, 'store']);
    Route::get('/resources/{id}/delete',[ResourcesController::class, 'destroy']);
    Route::get('/resources/{id}/edit',[ResourcesController::class, 'show']);
    Route::post('/resources/{id}/update',[ResourcesController::class, 'update']);
    //stakeholder
    Route::get('/stakeholder',[StakeholderController::class, 'index']);
    Route::get('/stakeholder/add',[StakeholderController::class, 'create']);
    Route::post('/stakeholder/save',[StakeholderController::class, 'store']);
    Route::get('/stakeholder/{id}/delete',[StakeholderController::class, 'destroy']);
    Route::get('/stakeholder/{id}/edit',[StakeholderController::class, 'show']);
    Route::post('/stakeholder/{id}/update',[StakeholderController::class, 'update']);
    //quality
    Route::get('/quality',[QualityController::class, 'index']);
    Route::get('/quality/add',[QualityController::class, 'create']);
    Route::post('/quality/save',[QualityController::class, 'store']);
    Route::get('/quality/{id}/delete',[QualityController::class, 'destroy']);
    Route::get('/quality/{id}/edit',[QualityController::class, 'show']);
    Route::post('/quality/{id}/update',[QualityController::class, 'update']);
    //procurement
    Route::get('/procurement',[ProcurementController::class, 'index']);
    Route::get('/procurement/add',[ProcurementController::class, 'create']);
    Route::post('/procurement/save',[ProcurementController::class, 'store']);
    Route::get('/procurement/{id}/delete',[ProcurementController::class, 'destroy']);
    Route::get('/procurement/{id}/edit',[ProcurementController::class, 'show']);
    Route::post('/procurement/{id}/update',[ProcurementController::class, 'update']);
    //beban barang
    Route::get('/bebanbarang',[BebanBarangController::class, 'index']);
    Route::get('/bebanbarang/add',[BebanBarangController::class, 'create']);
    Route::post('/bebanbarang/save',[BebanBarangController::class, 'store']);
    Route::get('/bebanbarang/{id}/delete',[BebanBarangController::class, 'destroy']);
    Route::get('/bebanbarang/{id}/edit',[BebanBarangController::class, 'show']);
    Route::post('/bebanbarang/{id}/update',[BebanBarangController::class, 'update']);
    //beban subkon
    Route::get('/bebansubkon',[BebanSubkonController::class, 'index']);
    Route::get('/bebansubkon/add',[BebanSubkonController::class, 'create']);
    Route::post('/bebansubkon/save',[BebanSubkonController::class, 'store']);
    Route::get('/bebansubkon/{id}/delete',[BebanSubkonController::class, 'destroy']);
    Route::get('/bebansubkon/{id}/edit',[BebanSubkonController::class, 'show']);
    Route::post('/bebansubkon/{id}/update',[BebanSubkonController::class, 'update']);
    //term plan
    Route::get('/termplan',[TermPlanController::class, 'index']);
    Route::get('/termplan/add',[TermPlanController::class, 'create']);
    Route::post('/termplan/save',[TermPlanController::class, 'store']);
    Route::get('/termplan/{id}/delete',[TermPlanController::class, 'destroy']);
    Route::get('/termplan/{id}/edit',[TermPlanController::class, 'show']);
    Route::post('/termplan/{id}/update',[TermPlanController::class, 'update']);
    //communication
    Route::get('/communication',[CommunicationController::class, 'index',]); 
    //reports
    Route::get('/reports',[ReportsController::class, 'index',]); 
    Route::get('/reports/add',[ReportsController::class, 'create']);
    Route::post('/reports/save',[ReportsController::class, 'store']);
    Route::get('/reports/{id}/delete',[ReportsController::class, 'destroy']);
    Route::post('/reports/{id}/update',[ReportsController::class, 'update']);
    Route::get('/reports/{id}/edit',[ReportsController::class, 'show']);
    //presentation
    Route::get('/presentation',[PresentationController::class, 'index',]);
    Route::get('/presentations/add',[PresentationController::class, 'create']);
    Route::post('/presentations/save',[PresentationController::class, 'store']);
    Route::get('/presentations/{id}/delete',[PresentationController::class, 'destroy']);
    Route::post('/presentations/{id}/update',[PresentationController::class, 'update']);
    Route::get('/presentations/{id}/edit', [PresentationController::class, 'show']);
    //project Anouncement
    Route::get('/projectAnouncement',[projectAnouncementController::class, 'index',]);
    Route::get('/projectAnouncement/add',[projectAnouncementController::class, 'create']);
    Route::post('/projectAnouncement/save',[projectAnouncementController::class, 'store']);
    Route::get('/projectAnouncement/{id}/delete',[projectAnouncementController::class, 'destroy']);
    Route::post('/projectAnouncement/{id}/update',[projectAnouncementController::class, 'update']);
    Route::get('/projectAnouncement/{id}/edit', [projectAnouncementController::class, 'show']);
    //review and meeting
    Route::get('/reviewMeeting',[reviewMeetingController::class, 'index',]);
    Route::get('/reviewMeeting/add',[reviewMeetingController::class, 'create']);
    Route::post('/reviewMeeting/save',[reviewMeetingController::class, 'store']);
    Route::get('/reviewMeeting/{id}/delete',[reviewMeetingController::class, 'destroy']);
    Route::post('/reviewMeeting/{id}/update',[reviewMeetingController::class, 'update']);
    Route::get('/reviewMeeting/{id}/edit', [reviewMeetingController::class, 'show']);
    //team morale
    Route::get('/teamMorale',[teamMoraleController::class, 'index',]);
    Route::get('/teamMorale/add',[teamMoraleController::class, 'create']);
    Route::post('/teamMorale/save',[teamMoraleController::class, 'store']);
    Route::get('/teamMorale/{id}/delete',[teamMoraleController::class, 'destroy']);
    Route::post('/teamMorale/{id}/update',[teamMoraleController::class, 'update']);
    Route::get('/teamMorale/{id}/edit', [teamMoraleController::class, 'show']); 
    //schedule   
    Route::get('/schedule',[ScheduleController::class, 'index',]);
    Route::get('/schedule/add',[ScheduleController::class, 'create']);
    Route::post('/schedule/save',[ScheduleController::class, 'store']);
    Route::get('/schedule/{id}/delete',[ScheduleController::class, 'destroy']);
    Route::post('/schedule/{id}/update',[ScheduleController::class, 'update']);
    Route::get('/schedule/{id}/edit', [ScheduleController::class, 'show']); 


    Route::get('/executing',[ExecutingController::class, 'index']);

    Route::get('/controlAndMonitoring',[ControlMonitoringController::class, 'index']);

    Route::get('/closing',[ClosingController::class, 'index']);

    Route::get('/dashboard', function () {
        return view('home.dashboard');
    });

    Route::get('/report', [ReportController::class, 'index']);
    Route::get('/report-pdf', [ReportController::class, 'printPDF'])->name('print.pdf');

    
    Route::get('/human', function () {
        return view('human');
    });
    
    Route::get('/supply', function () {
        return view('supply');
    });
    
    Route::get('/finance', function () {
        return view('finance');
    });
    
    Route::get('/bussines', function () {
        return view('bussines');
    });

    

    
    Route::get('/logout', [LoginController::class, 'logout']);
    
});