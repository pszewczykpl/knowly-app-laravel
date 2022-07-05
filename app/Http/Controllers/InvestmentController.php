<?php

namespace App\Http\Controllers;

use App\Http\Resources\InvestmentCollection;
use App\Http\Resources\InvestmentResource;
use App\Models\Investment;
use App\Http\Requests\StoreInvestmentRequest;
use App\Http\Requests\UpdateInvestmentRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return InvestmentCollection
     */
    public function index(): InvestmentCollection
    {
        return new InvestmentCollection(Investment::all()->where('is_archived', 0));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreInvestmentRequest $request
     * @return Response
     */
    public function store(Request $request)
    {
        $investment = new Investment($request->all());
//        Auth('sanctum')->user()->investments()->save($investment);
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
     * @return JsonResponse
     */
    public function show(Investment $investment): JsonResponse
    {
        return response()->json([
            'data' => $investment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateInvestmentRequest $request
     * @param Investment $investment
     * @return Response
     */
    public function update(Request $request, Investment $investment)
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
