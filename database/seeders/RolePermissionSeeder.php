<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Permission ::create(['name'=>'tambah-admin']);
        Permission ::create(['name'=>'edit-admin']);
        Permission ::create(['name'=>'hapus-admin']);
        Permission ::create(['name'=>'lihat-admin']);
      
        Permission ::create(['name'=>'tambah-barang']);
        Permission ::create(['name'=>'edit-barang']);
        Permission ::create(['name'=>'hapus-barang']);
        Permission ::create(['name'=>'lihat-barang']);

        Role::create(['name'=>'admin']);
        Role::create(['name'=>'owner']);
        Role::create(['name'=>'pembeli']);

        $roleAdmin = Role::findByName('owner');
        $roleAdmin->givePermissionTo('tambah-admin');
        $roleAdmin->givePermissionTo('hapus-admin');
        $roleAdmin->givePermissionTo('tambah-barang');
        $roleAdmin->givePermissionTo('edit-barang');
        $roleAdmin->givePermissionTo('hapus-barang');
        $roleAdmin->givePermissionTo('lihat-barang');

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('tambah-barang');
        $roleAdmin->givePermissionTo('edit-barang');
        $roleAdmin->givePermissionTo('hapus-barang');
        $roleAdmin->givePermissionTo('lihat-barang');
    }
}
