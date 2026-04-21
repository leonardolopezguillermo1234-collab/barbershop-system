<?php

namespace App\Controllers;

use App\Models\Appointment;
use App\Repositories\AppointmentRepository;

class CitasController {
    private $repository;

    public function __construct() {
        $this->repository = new AppointmentRepository();
    }

    // Create a new appointment
    public function create(array $data) {
        return $this->repository->create($data);
    }

    // Get all appointments
    public function getAll() {
        return $this->repository->getAll();
    }

    // Get appointment by ID
    public function getById($id) {
        return $this->repository->getById($id);
    }

    // Update appointment
    public function update($id, array $data) {
        return $this->repository->update($id, $data);
    }

    // Delete appointment
    public function delete($id) {
        return $this->repository->delete($id);
    }

    // Get appointments by barber
    public function getByBarbero($barberoId) {
        return $this->repository->getByBarbero($barberoId);
    }

    // Get appointments by client
    public function getByCliente($clienteId) {
        return $this->repository->getByCliente($clienteId);
    }

    // Change appointment status
    public function changeStatus($id, $status) {
        return $this->repository->changeStatus($id, $status);
    }
}
