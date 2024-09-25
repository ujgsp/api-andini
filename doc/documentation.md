# Dokumentasi API Andini

## Overview
Dokumentasi ini menjelaskan endpoint yang tersedia dalam API dan cara menggunakannya.

### Base URL
http://localhost:8000/api

### Versioning
Versi API ini adalah `1.0.0`.


## Endpoints

### 1. Get Daftar Armada

- **URL**: `/armada`
- **Method**: `GET`
- **Auth Required**: No


#### Responses
- **200 OK**
  ```json
  {
      "success": true,
      "message": "Daftar Data Armada",
      "data": [
        {
            "unit": "derek",
            "no_hp": "081213111000",
            "status": "ON"
        },
        ...
      ]
  }

- **404 Not Found**
  ```json
  {
      "success": false,
      "message": "Data Armada tidak ditemukan",
      "data": []
  }

### 2. Get Daftar TMC Validasi

- **URL**: `/tmc`
- **Method**: `GET`
- **Auth Required**: No


#### Responses
- **200 OK**
  ```json
  {
      "success": true,
      "message": "Daftar Data TMC validasi",
      "data": [
        {
          "id": 1,
          "id_detek": "NOA/TMC/0118-001/2023",
          "cctv": "KM110",
          "tanggal": "2023-01-18 10:31:21",
          "foto": "http://192.84.11.253:5010/km100_view.jpg",
          "tempat": "JALUR A",
          "penyebab": "KENDARAAN BERHENTI",
          "lat": "0",
          "lng": "0",
          "proses": "1",
          "patroli": "BRAVO_02",
          "maps": "http://maps.google.com/maps?q=loc:-0,0",
          "folder": "NOATMC0118-0012023",
          "p_tiba": "2023-01-18 10:33:00",
          "p_selesai": "2023-01-18 10:33:00",
          "keterangan_penanganan": "0",
          "foto_penangan": "http://192.84.11.253/andini/uploads/NOATMC0118-0012023/wp.jpg",
          "foto_deteksi": null,
          "derek": null,
          "rescue": null,
          "ambulance": null
          },
        ...
      ],
      "total": 19
  }

- **404 Not Found**
  ```json
  {
      "success": false,
      "message": "Data TMC validasi tidak ditemukan",
      "data": [],
      "total": 0
  }

### 3. Get Daftar TMC Validasi Perpage

- **URL**: `/tmc-perpage`
- **Method**: `GET`
- **Auth Required**: No


#### Responses
- **200 OK**
  ```json
  {
    "success": true,
    "message": "Daftar Data TMC validasi perpage",
    "data": [
        {
            "id": 1,
            "id_detek": "NOA/TMC/0118-001/2023",
            "cctv": "KM110",
            "tanggal": "2023-01-18 10:31:21",
            "foto": "http://192.84.11.253:5010/km100_view.jpg",
            "tempat": "JALUR A",
            "penyebab": "KENDARAAN BERHENTI",
            "lat": "0",
            "lng": "0",
            "proses": "1",
            "patroli": "BRAVO_02",
            "maps": "http://maps.google.com/maps?q=loc:-0,0",
            "folder": "NOATMC0118-0012023",
            "p_tiba": "2023-01-18 10:33:00",
            "p_selesai": "2023-01-18 10:33:00",
            "keterangan_penanganan": "0",
            "foto_penangan": "http://192.84.11.253/andini/uploads/NOATMC0118-0012023/wp.jpg",
            "foto_deteksi": null,
            "derek": null,
            "rescue": null,
            "ambulance": null
        },
        ...
    ],
    "links": {
        "first": "http://localhost/laravel/10/api-andini/public/api/tmc-perpage?page=1",
        "last": "http://localhost/laravel/10/api-andini/public/api/tmc-perpage?page=2",
        "prev": null,
        "next": "http://localhost/laravel/10/api-andini/public/api/tmc-perpage?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 2,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://localhost/laravel/10/api-andini/public/api/tmc-perpage?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "http://localhost/laravel/10/api-andini/public/api/tmc-perpage?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "http://localhost/laravel/10/api-andini/public/api/tmc-perpage?page=2",
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://localhost/laravel/10/api-andini/public/api/tmc-perpage",
        "per_page": 10,
        "to": 10,
        "total": 19
    }
}

- **404 Not Found**
  ```json
  {
        "success": false,
        "message": "Data TMC validasi tidak ditemukan",
        "data": []
  }
