<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePetShopRequest;
use App\Http\Requests\UpdatePetShopRequest;
use App\Repositories\PetShopRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PetShopController extends AppBaseController
{
    /** @var  PetShopRepository */
    private $petShopRepository;

    public function __construct(PetShopRepository $petShopRepo)
    {
        $this->petShopRepository = $petShopRepo;
    }

    /**
     * Display a listing of the PetShop.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $petShops = $this->petShopRepository->all();

        return view('pet_shops.index')
            ->with('petShops', $petShops);
    }

    /**
     * Show the form for creating a new PetShop.
     *
     * @return Response
     */
    public function create()
    {
        return view('pet_shops.create');
    }

    /**
     * Store a newly created PetShop in storage.
     *
     * @param CreatePetShopRequest $request
     *
     * @return Response
     */
    public function store(CreatePetShopRequest $request)
    {
        $input = $request->all();

        $petShop = $this->petShopRepository->create($input);

        Flash::success('Pet Shop saved successfully.');

        return redirect(route('petShops.index'));
    }

    /**
     * Display the specified PetShop.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $petShop = $this->petShopRepository->find($id);

        if (empty($petShop)) {
            Flash::error('Pet Shop not found');

            return redirect(route('petShops.index'));
        }

        return view('pet_shops.show')->with('petShop', $petShop);
    }

    /**
     * Show the form for editing the specified PetShop.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $petShop = $this->petShopRepository->find($id);

        if (empty($petShop)) {
            Flash::error('Pet Shop not found');

            return redirect(route('petShops.index'));
        }

        return view('pet_shops.edit')->with('petShop', $petShop);
    }

    /**
     * Update the specified PetShop in storage.
     *
     * @param int $id
     * @param UpdatePetShopRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePetShopRequest $request)
    {
        $petShop = $this->petShopRepository->find($id);

        if (empty($petShop)) {
            Flash::error('Pet Shop not found');

            return redirect(route('petShops.index'));
        }

        $petShop = $this->petShopRepository->update($request->all(), $id);

        Flash::success('Pet Shop updated successfully.');

        return redirect(route('petShops.index'));
    }

    /**
     * Remove the specified PetShop from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $petShop = $this->petShopRepository->find($id);

        if (empty($petShop)) {
            Flash::error('Pet Shop not found');

            return redirect(route('petShops.index'));
        }

        $this->petShopRepository->delete($id);

        Flash::success('Pet Shop deleted successfully.');

        return redirect(route('petShops.index'));
    }
}
