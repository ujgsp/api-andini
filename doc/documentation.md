# Dokumentasi API Andini

## Overview
API Andini adalah RESTful API yang menyediakan data terkait armada, informasi laka (kecelakaan), tmc dan cctv

API ini dirancang untuk memudahkan integrasi dengan berbagai aplikasi frontend atau sistem eksternal yang memerlukan akses real-time ke data tersebut.

### Base URL
`http://localhost:8000/api`

### Versioning
Versi API ini adalah `1.0.0`.

## Endpoints

---

### 1. Get Daftar Armada

- **URL**: `/armada`
- **Method**: `GET`
- **Auth Required**: No
- **Query Parameters**:
  - `limit` (optional): jumlah data yang ingin diambil.
  - `offset` (optional): posisi awal data untuk pagination.

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
      ],
      "total": 10
  }

- **404 Not Found**
  ```json
  {
      "success": false,
      "message": "Data Armada tidak ditemukan",
      "data": []
  }
---

### 2. Get Daftar Tmc

- **URL**: `/tmc`
- **Method**: `GET`
- **Auth Required**: No
- **Query Parameters**:
  - `limit` (optional): jumlah data yang ingin diambil.
  - `offset` (optional): posisi awal data untuk pagination.

#### Responses
- **200 OK**
  ```json
  {
      "success": true,
      "message": "Daftar Data Tmc",
      "data": [
        {
            "id": 1,
            "id_detek": "NOA/TMC/0930-001/2024",
            "cctv": "KM72",
            "tanggal": "2024-09-30 11:35:02",
            "foto": "dev.jpg.jpg",
            "tempat": "JALUR A",
            "penyebab": "KECELAKAAN",
            "lat": "6.537359",
            "lng": "107.850511",
            "proses": "1",
            "patroli": "BRAVO_03",
            "maps": "http://maps.google.com/maps?q=loc:-6.537359,107.850511",
            "folder": "NOATMC0930-0012024",
            "p_tiba": "2024-09-30 11:55:00",
            "p_selesai": "2024-09-30 00:00:00",
            "keterangan_penanganan": "test",
            "foto_penangan": "http://192.84.11.253/andini/uploads/NOATMC0930-0012024/",
            "foto_deteksi": "http://192.84.11.253/andini/ANDINI/area.jpg",
            "derek": "GAJAH 03",
            "rescue": "RESCUE L01",
            "ambulance": "MEDIS KP01"
        },
        ...
      ],
      "total": 10
  }

- **404 Not Found**
  ```json
  {
      "success": false,
      "message": "Data Tmc tidak ditemukan",
      "data": []
  }

--- 

### 3. Get Daftar Laka

- **URL**: `/laka`
- **Method**: `GET`
- **Auth Required**: No
- **Query Parameters**:
  - `limit` (optional): jumlah data yang ingin diambil.
  - `offset` (optional): posisi awal data untuk pagination.

#### Responses
- **200 OK**
  ```json
  {
      "success": true,
      "message": "Daftar Data Tmc",
      "data": [
        {
           "id": 1,
            "tanggal": "2024-10-22",
            "jam": "09:37:11",
            "lokasi": "KM 138",
            "jalur": "B",
            "gol_kendaraan": "GOL-I",
            "korban": "LR",
            "faktor_penyebab": "Manusia",
            "detail_penyebab": "mengantuk",
            "kejadian": "kurang ngipi, kendaraan oleng masuk parit"
        },
        ...
      ],
      "total": 10
  }

- **404 Not Found**
  ```json
  {
      "success": false,
      "message": "Data Laka tidak ditemukan",
      "data": []
  }

--- 

### 4. Get Daftar Cctv

- **URL**: `/cctv`
- **Method**: `GET`
- **Auth Required**: No
- **Query Parameters**:
  - `limit` (optional): jumlah data yang ingin diambil.
  - `offset` (optional): posisi awal data untuk pagination.

#### Responses
- **200 OK**
  ```json
  {
      "success": true,
      "message": "Daftar Data Cctv",
      "data": [
        {
           "id_cctv": 30,
            "nama_cctv": "CCTV KM 72+580",
            "latitude": "-6.439099",
            "longitude": "107.469297",
            "status": "ON",
            "is_shown": "",
            "lokasi": "KM 72+580",
            "id_bujt": "LMS"
        },
        ...
      ],
      "total": 10
  }

- **404 Not Found**
  ```json
  {
      "success": false,
      "message": "Data Cctv tidak ditemukan",
      "data": []
  }

--- 

### Status Code
- `200 OK` : Permintaan berhasil dan data tersedia. 
- `404 Not Found` : Data tidak ditemukan dalam database.
