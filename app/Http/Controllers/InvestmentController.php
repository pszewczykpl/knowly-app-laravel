<?php

namespace App\Http\Controllers;

use App\Http\Resources\FileResource;
use App\Http\Resources\InvestmentListResource;
use App\Http\Resources\InvestmentResource;
use App\Models\Investment;
use App\Http\Requests\StoreInvestmentRequest;
use App\Http\Requests\UpdateInvestmentRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResource
     */
    public function index(): JsonResource
    {
        return InvestmentListResource::collection(Investment::where('is_archived', 0)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreInvestmentRequest $request
     * @return Response
     */
    public function store(Request $request): Response
    {
        $investment = new Investment($request->all());
        auth()->user()->investments()->save($investment);
        $investment->save();

        return response([
            'message' => 'Successfully created.',
            'data' => new InvestmentResource($investment)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Investment $investment
     * @return InvestmentResource
     */
    public function show(Investment $investment): InvestmentResource
    {
        return new InvestmentResource($investment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateInvestmentRequest $request
     * @param Investment $investment
     * @return Response
     */
    public function update(Request $request, Investment $investment): Response
    {
        $investment->update($request->all());

        return response([
            'message' => 'Successfully updated.',
            'data' => new InvestmentResource($investment)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Investment $investment
     * @return Response
     */
    public function destroy(Investment $investment): Response
    {
        $investment->delete();

        return response([
            'message' => 'Successfully deleted.'
        ], 200);
    }
}
